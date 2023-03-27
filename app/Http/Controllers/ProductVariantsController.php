<?php

namespace App\Http\Controllers;

use App\Models\ProductVariants;
use Illuminate\Http\Request;

class ProductVariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductVariants::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ProductVariants::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ProductVariants::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $variant = ProductVariants::where('id', $id)->get();

        $variant->toQuery()->update($request->all());

        return $variant;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ProductVariants::destroy($id);
    }
}
