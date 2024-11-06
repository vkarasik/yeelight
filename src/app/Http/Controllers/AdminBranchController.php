<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class AdminBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $attributes = $request->validate([
            'address' => 'required',
            'lat' => 'required|decimal:6',
            'lon' => 'required|decimal:6',
            'phone' => 'nullable|regex:/^\+375[0-9]{9}$/i',
            'schedule' => 'nullable',
            'shop_id' => 'required|numeric'
        ]);

        Branch::create($attributes);

        return redirect("/admin/shops/{$request['shop_id']}/edit");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'address' => 'required',
            'lat' => 'required|decimal:6',
            'lon' => 'required|decimal:6',
            'phone' => 'nullable|regex:/^\+375[0-9]{9}$/i',
            'schedule' => 'nullable',
        ]);

        $branch = Branch::findOrFail($id);

        $branch->update($request->all());
        return json_encode(['message' => 'Branch successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Branch::destroy($id);
        return back();
    }
}
