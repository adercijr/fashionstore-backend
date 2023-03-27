<?php

namespace App\Http\Controllers;

use App\Models\ProductBrand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductBrand::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ProductBrand::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ProductBrand::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $product = ProductBrand::where('id', $id)->get();

        $product->toQuery()->update($request->all());

        return $product;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ProductBrand::destroy($id);

        
    }
}
