<?php

namespace App\Http\Controllers;


use App\Models\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = categorias::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pastas' => 'required',
            'granos' => 'required',
            'harinas' => 'required',
        ]);

        categorias::create($request->all());

        return redirect()->route('categorias.index')->with('success', 'categorias creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categorias $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorias $categoria)
    {
        $request->validate([
            'pastas' => 'required',
            'granos' => 'required',
            'harinas' => 'required',
        ]);

        $categoria->update($request->all());
        return redirect()->route('categorias.index')->with('success', 'categorias creado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categorias $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'categorias eliminado con éxito');
    }
}
