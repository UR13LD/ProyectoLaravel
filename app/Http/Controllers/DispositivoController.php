<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use App\Models\Categoria;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dispositivos = Dispositivo::all();
        return view('dispositivoIndex', compact('dispositivos'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('dispositivoCreate', compact('categorias'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'precio' => 'required|numeric',
        'categorias' => 'required|array',
        'categorias.*' => 'exists:categorias,id'
    ]);

    $dispositivo = new Dispositivo($validatedData);
    $dispositivo->save();
    $dispositivo->categorias()->attach($request->categorias);

    Session()->flash('success', 'Se ha guardado con éxito');
    return redirect('/dispositivo')->with('success', 'Se ha guardado con éxito');

}


    /**
     * Display the specified resource.
     */
    public function show(Dispositivo $dispositivo)
    {
        return view('/dispositivoShow', compact('dispositivo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispositivo $dispositivo)
    {
        // return view('dispositivoEdit', compact('dispositivo'));

        $categorias = Categoria::all();
        return view('dispositivoEdit', compact('categorias', 'dispositivo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dispositivo $dispositivo)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'precio' => 'required|numeric',
    ]);

    $dispositivo->update($validatedData);

    if ($request->has('categorias')) {
        $dispositivo->categorias()->sync($request->categorias);
    } else {
        $dispositivo->categorias()->detach();
    }

    Session()->flash('success', 'Se ha modificado con éxito');
    return redirect('/dispositivo');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dispositivo $dispositivo)
    {
        $dispositivo->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/dispositivo');
    }
}