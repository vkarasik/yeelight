<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.products.index', [
            'title' => 'Edit product props',
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create', [
            'title' => 'Create product',
            'categories' => Category::all()
        ]);
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
    public function edit(string $id): View
    {
        return view('admin.products.edit', [
            'title' => 'Edit product',
            'product' => Product::where('id', $id)->first(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $thumbnail = $request
                ->file('thumbnail')
                ->store('uploads', 'public');

            $product->thumbnail = "storage/{$thumbnail}";
        }

        $product->name = $request['name'];
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->keywords = $request['keywords'];
        $product->category_id = $request['category_id'];

        $product->save();

        return redirect('/admin/products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $thumbnail = $request
                ->file('thumbnail')
                ->store('uploads', 'public');

            $product->thumbnail = "storage/{$thumbnail}";
        }

        $product->name = $request['name'];
        $product->slug = $request['slug'];
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->keywords = $request['keywords'];
        $product->category_id = $request['category_id'];

        $product->save();
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect('/admin/products');
    }
}
