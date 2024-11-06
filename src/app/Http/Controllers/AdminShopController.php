<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class AdminShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.shops.index', [
            'title' => 'Edit shops',
            'shops' => Shop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.shops.create', [
            'title' => 'Create shops',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required|max:50',
            'url' => 'required|url:http,https',
            'logo' => 'nullable|file|image',
        ]);

        $shop = new Shop;

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $logo = $request
                ->file('logo')
                ->store('uploads', 'public');

            $shop->logo = "storage/{$logo}";
        }

        $shop->name = $request['name'];
        $shop->title = $request['title'];
        $shop->url = $request['url'];
        $shop->save();

        return redirect("/admin/shops/{$shop->id}/edit");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.shops.edit', [
            'title' => 'Edit shop',
            'shop' => Shop::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required|max:50',
            'url' => 'required|url:http,https',
            'logo' => 'nullable|file|image',
        ]);

        $shop = Shop::find($id);

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $logo = $request
                ->file('logo')
                ->store('uploads', 'public');

            $shop->logo = "storage/{$logo}";
        }

        $shop->name = $request['name'];
        $shop->title = $request['title'];
        $shop->url = $request['url'];
        $shop->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Shop::destroy($id);
        return back();
    }
}
