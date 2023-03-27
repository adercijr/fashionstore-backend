<?php

namespace App\Http\Controllers;

use App\Models\ProductActivity;
use Illuminate\Http\Request;

class ProductActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductActivity::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ProductActivity::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ProductActivity::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $product = ProductActivity::where('id', $id)->get();

        $product->toQuery()->update($request->all());

        return $product;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ProductActivity::destroy($id);

        
    }
}
