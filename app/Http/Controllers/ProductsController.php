<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')->with('success', 'products creado con éxito');
    }

    /**
     * Display the specified resource.
     */


     public function edit(Products $product)
    {
        return view('products.edit', compact('product'));

    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'products actualizado con éxito');
    }

    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'products eliminado con éxito');
    }
}
