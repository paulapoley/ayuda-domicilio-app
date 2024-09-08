<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Cita;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServicioRequest;
use App\Http\Requests\UpdateServicioRequest;


class ServicioController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::paginate(25);
        return view('/servicios/index', ['servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('servicios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServicioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicioRequest $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
          
        ]);
        $servicio = new Servicio($request->all());
        $servicio->save();
        session()->flash('success', 'Servicio creado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('servicios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
       // return view('servicios/show', ['servicio' => $servicio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        return view('servicios/edit', ['servicio' => $servicio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicioRequest  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicioRequest $request, Servicio $servicio)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',

        ]);
        $servicio->fill($request->all());
        $servicio->save();
        session()->flash('success', 'Servicio modificado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('servicios.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        if($servicio->delete()) {
            session()->flash('success', 'Servicio borrado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        }
        else{
            session()->flash('warning', 'No pudo borrarse el servicio.');
        }
        return redirect()->route('servicios.index');
    }

}
