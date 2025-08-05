<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use App\Http\Requests\StoreLineaRequest;
use App\Http\Requests\UpdateLineaRequest;
use App\Models\Programa;

class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lineas=Linea::all();
        return view('linea.index',[
            'lineas'=>$lineas
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $programas=Programa::all();
        return view("linea.create",
    ['programas'=>$programas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLineaRequest $request)
    {
         $linea=Linea::create(request()->all());
        session()->flash('success',"La Linea fue dada de alta exitosamente.");
        return redirect()->route('lineas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Linea $linea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Linea $linea)
    {   
        $programas=Programa::all();
        return view('linea.edit',[
            'linea'=>$linea,
            'programas'=>$programas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLineaRequest $request, Linea $linea)
    {
         $linea->update(request()->all());
            session()->flash('success',"La linea fue modificada exitosamente.");
        return redirect()->route('lineas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Linea $linea)
    {
        $linea->delete();
        session()->flash('success',"La linea de {$linea->nombre}, fue borrada exitosamente.");
        return redirect()->route('lineas.index');
    }
}
