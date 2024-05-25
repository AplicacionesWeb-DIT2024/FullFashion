<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $productos = Producto::with('marca')->paginate(4);
        return view('indexProducto', ['productos'=> $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $marcas = Marca::all();
        return view('createProducto', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request ->validate([
            'codigo'=> 'required',
            'nombre'=> 'required',
            'marca_id'=> 'required',
            'genero'=> 'required',
            'categoria'=> 'required',
            'talla'=> 'required',
            'color'=> 'required',
            'precio'=> 'required',
            'cantidad_en_stock'=> 'required'
        ]);
        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success','Producto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto): View
    {
        return view('editProducto', ['producto'=> $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto): RedirectResponse
    {
        $request ->validate([
            'codigo'=> 'required',
            'nombre'=> 'required',
            'marca_id'=> 'required',
            'genero'=> 'required',
            'categoria'=> 'required',
            'talla'=> 'required',
            'precio'=> 'required',
            'cantidad_en_stock'=> 'required'
        ]);
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success','Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto): RedirectResponse
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success','Producto eliminado exitosamente');
    }
}
