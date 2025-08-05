<?php

namespace App\Http\Controllers;

use App\Models\Subdirector;
use App\Http\Requests\StoreSubdirectorRequest;
use App\Http\Requests\UpdateSubdirectorRequest;
use App\Models\Carrera;

class SubdirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subdirectors=Subdirector::all();
        return view('subdirector.index',[
            'subdirectors'=>$subdirectors
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras=Carrera::all();
         return view('subdirector.create',
        ['carreras'=>$carreras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubdirectorRequest $request)
    {
        $subdirector=Subdirector::create(request()->all());
        session()->flash('success',"El Director de Carrera fue dado de alta exitosamente.");
        return redirect()->route('subdirector.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subdirector $subdirector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subdirector $subdirector)
    {
        $carreras=Carrera::all();
        return view('subdirector.edit',[
            'subdirector'=>$subdirector,
            'carreras'=>$carreras
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubdirectorRequest $request, Subdirector $subdirector)
    {
         $subdirector->update(request()->all());
            session()->flash('success',"EL director de Carrera fue modificado exitosamente.");
        return redirect()->route('subdirctor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subdirector $subdirector)
    {
        $subdirector->delete();
        session()->flash('success',"El director  {$subdirector->nombre}, fue borrado exitosamente.");
        return redirect()->route('subdirector.index');
    }
}
