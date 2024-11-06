<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class AdminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.index', [
            'title' => 'Edit slider',
            'slider' => Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create', [
            'title' => 'Create new slide',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:40',
            'subtitle' => 'required|max:70',
            'link' => 'required',
            'css' => 'nullable|regex:/(^[\w-]+:.+;$)+/i',
            'img' => 'required|file|image',
        ]);

        $slide = new Slider;

        $img = $request
            ->file('img')
            ->store('uploads', 'public');
        $slide->img = "storage/{$img}";

        $slide->title = $request['title'];
        $slide->subtitle = $request['subtitle'];
        $slide->link = $request['link'];
        $slide->css = $request['css'];

        $slide->save();

        Cache::forget('slider');

        return redirect('/admin/slider');
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
        return view('admin.slider.edit', [
            'title' => 'Edit slider',
            'slider' => Slider::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'title' => 'required|max:40',
            'subtitle' => 'required|max:70',
            'link' => 'required',
            'css' => 'nullable|regex:/(^[\w-]+:.+;$)+/i',
            'img' => 'nullable|file|image',
        ]);

        $slide = Slider::find($id);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $img = $request
                ->file('img')
                ->store('uploads', 'public');

            $slide->img = "storage/{$img}";
        }

        $slide->title = $request['title'];
        $slide->subtitle = $request['subtitle'];
        $slide->link = $request['link'];
        $slide->css = $request['css'];

        $slide->save();

        return redirect('/admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Slider::destroy($id);

        Cache::forget('slider');

        return redirect('/admin/slider');
    }
}
