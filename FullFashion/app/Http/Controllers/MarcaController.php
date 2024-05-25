<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $marcas = Marca::paginate(4);
        return view('indexMarca', ['marcas'=> $marcas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('createMarca');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request ->validate([
            'nombre'=> 'required',
            'pais_origen'=> 'required'
        ]);
        Marca::create($request->all());
        return redirect()->route('marcas.index')->with('success','Marca creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marca $marca): View
    {
        return view('editMarca', ['marca'=> $marca]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marca $marca): RedirectResponse
    {
        $request ->validate([
            'nombre'=> 'required',
            'pais_origen'=> 'required'
        ]);
        $marca->update($request->all());
        return redirect()->route('marcas.index')->with('success','Marca actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca): RedirectResponse
    {
        $marca->delete();
        return redirect()->route('marcas.index')->with('success','Marca eliminada exitosamente');
    }
}
