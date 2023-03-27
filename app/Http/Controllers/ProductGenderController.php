<?php

namespace App\Http\Controllers;

use App\Models\ProductGender;
use Illuminate\Http\Request;

class ProductGenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductGender::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ProductGender::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ProductGender::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $product = ProductGender::where('id', $id)->get();

        $product->toQuery()->update($request->all());

        return $product;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ProductGender::destroy($id);

        
    }
}
