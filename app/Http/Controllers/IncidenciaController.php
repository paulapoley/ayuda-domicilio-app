<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
use App\Models\Profesional;
use App\Models\Familiar;
use App\Models\Cita;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreIncidenciaRequest;
use App\Http\Requests\UpdateIncidenciaRequest;


class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Incidencia::class, 'incidencia');
    }
    public function index()
    {
        $incidencias = Incidencia::paginate(25);
        return view('/incidencias/index', ['incidencias' => $incidencias]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesionals = Profesional::all();
        $familiars = Familiar::all();
        if(Auth::user()->tipo_usuario_id == 1){
            return view('incidencias/create', ['profesional' => Auth::user()->profesional, 'familiars' => $familiars]);
        }
        elseif(Auth::user()->tipo_usuario_id == 2) {
            return view('incidencias/create', ['familiar' => Auth::user()->familiar, 'profesionals' => $profesionals]);
        }
        return view('incidencias/create', ['familiars' => $familiars, 'profesionals' => $profesionals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIncidenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncidenciaRequest $request)
    {
        $reglas = [
            'fecha' => 'required|dateTime',
            'profesional_id' => 'required|exists:profesionals,id',
        ];
        if(Auth::user()->tipo_usuario_id == 2){
            $reglas_familiar = ['familiar_id' => ['required', 'exists:familiars,id']];
            $reglas = array_merge($reglas_familiar, $reglas);
        }
        else{
            $reglas_generales = ['familiar_id' => ['required', 'exists:familiars,id']];
            $reglas = array_merge($reglas_generales, $reglas);
        }
        $incidencia = new Incidencia($request->all());
        $incidencia->save();
        session()->flash('success', 'Incidencia creada correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('incidencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
       // return view('incidencias/show', ['incidencia' => $incidencia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        return view('incidencias/edit', ['incidencia' => $incidencia]);
        $profesionals = Profesional::all();
        $familiars = Familiar::all();
        if(Auth::user()->tipo_usuario_id == 1){
            return view('incidencias/edit', ['incidencia' => $incidencia, 'medico' => Auth::user()->medico, 'pacientes' => $pacientes, 'medicamentos' => $medicamentos]);
        }
        elseif(Auth::user()->tipo_usuario_id == 2) {
            return view('incidencias/edit', ['incidencia' => $incidencia, 'paciente' => Auth::user()->paciente, 'medicos' => $medicos, 'medicamentos' => $medicamentos]);
        }
        return view('incidencias/edit', ['incidencia' => $incidencia, 'pacientes' => $pacientes, 'medicos' => $medicos, 'medicamentos' => $medicamentos]);
    }
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncidenciaRequest  $request
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncidenciaRequest $request, Incidencia $incidencia)
    {
        $reglas = [
            'fecha' => 'required|dateTime',
            'profesional_id' => 'required|exists:profesionals,id',
            
        ];
        if(Auth::user()->tipo_usuario_id == 2){
            $reglas_familiar = ['familiar_id' => ['required', 'exists:familiars,id']];
            $reglas = array_merge($reglas_familiar, $reglas);
        }
        else{
            $reglas_generales = ['familiar_id' => ['required', 'exists:familiars,id']];
            $reglas = array_merge($reglas_generales, $reglas);
        }
        $incidencia->fill($request->all());
        $incidencia->save();
        session()->flash('success', 'Incidencia modificada correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('incidencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencia $incidencia)
    {
        if($incidencia->delete()) {
            session()->flash('success', 'Incidencia borrada correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        }
        else{
            session()->flash('warning', 'La incidencia no pudo borrarse. ');
        }
        return redirect()->route('incidencias.index');
    }
}
