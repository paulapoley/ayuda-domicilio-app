<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Servicio;
use App\Models\Profesional;
use App\Models\Familiar;
use App\Http\Requests\StoreCitaRequest;
use App\Http\Requests\UpdateCitaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class CitaController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Cita::class, 'cita');
    }

    public function index()
    {
        $citas = Cita::orderBy('fechaHoraInicio', 'asc')->paginate(25);
        if(Auth::user()->tipo_usuario_id == 1){
            $citas = Auth::user()->profesional->citas()->orderBy('fechaHoraInicio', 'asc')->paginate(25);
        }
        elseif(Auth::user()->tipo_usuario_id == 2){
            $citas = Auth::user()->familiar->citas()->orderBy('fechaHoraInicio', 'asc')->paginate(25);
        }
        return view('/citas/index', ['citas' => $citas]);
    }

   
    public function create()
    {
        $profesionals = Profesional::all();
        $familiars = Familiar::all();
        if(Auth::user()->tipo_usuario_id == 1){
            return view('citas/create', ['profesional' => Auth::user()->profesional, 'familiars' => $familiars]);
        }
        elseif(Auth::user()->tipo_usuario_id == 2) {
            return view('citas/create', ['familiar' => Auth::user()->familiar, 'profesionals' => $profesionals]);
        }
        return view('citas/create', ['familiars' => $familiars, 'profesionals' => $profesionals]);
    }


    public function store(StoreCitaRequest $request)
    {
        $reglas = [
            'fechaHoraInicio' => 'required|date|after:yesterday',
            'fechaHoraFin' => 'required|date|after:fechaHoraInicio',
            'profesional_id' => 'required|exists:profesionals,id',
           
        ];
        if(Auth::user()->tipo_usuario_id == 2){
            $reglas_familiar = ['familiar_id' => ['required', 'exists:familiars,id', Rule::in(Auth::user()->familiar->id)]];
            $reglas = array_merge($reglas_familiar, $reglas);
        }
        else{
            $reglas_generales = ['familiar_id' => ['required', 'exists:familiars,id']];
            $reglas = array_merge($reglas_generales, $reglas);
        }
        //dd($request->all());
        $this->validate($request, $reglas);
        $cita = new Cita($request->all());
        $cita->save();
        session()->flash('success', 'Cita creada correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('citas.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        return view('citas/show', ['cita' => $cita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
     //Le paso a la vista los servicios porque permito añadir una prescripción desde esa misma vista

        $servicios = Servicio::all();
        $profesionals = Profesional::all();
        $familiars = Familiar::all();
        if(Auth::user()->tipo_usuario_id == 1){
            return view('citas/edit', ['cita' => $cita, 'profesional' => Auth::user()->profesional, 'familiars' => $familiars, 'servicios' => $servicios]);
        }
        elseif(Auth::user()->tipo_usuario_id == 2) {
            return view('citas/edit', ['cita' => $cita, 'familiar' => Auth::user()->familiar, 'profesionals' => $profesionals, 'servicios' => $servicios]);
        }
        return view('citas/edit', ['cita' => $cita, 'familiars' => $familiars, 'profesionals' => $profesionals, 'servicios' => $servicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCitaRequest  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitaRequest $request, Cita $cita)
    {
        $reglas = [
            'fechaHoraInicio' => 'required|date|after:yesterday',
            'fechaHoraFin' => 'required|date|after:',
            'profesional_id' => 'required|exists:profesionals,id',
            
        ];
        if(Auth::user()->tipo_usuario_id == 2){
            $reglas_familiar = ['familiar_id' => ['required', 'exists:familiars,id', Rule::in(Auth::user()->familiar->id)]];
            $reglas = array_merge($reglas_familiar, $reglas);
        }
        else{
            $reglas_generales = ['familiar_id' => ['required', 'exists:familiars,id']];
            $reglas = array_merge($reglas_generales, $reglas);
        }
        $this->validate($request, $reglas);
        $cita->fill($request->all());
        $cita->save();
        session()->flash('success', 'Cita modificada correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        if($cita->delete()) {
            session()->flash('success', 'La cita se ha borrado adecuadadmente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        }
        else{
            session()->flash('warning', 'Atención. La cita no se ha podido borrar. ');
        }
        return redirect()->route('citas.index');
    }
    //Ahora voy a hacer lo de Cita_Servicio --> que es lo de LineaServicio
    
    public function attach_servicio(Request $request, Cita $cita)
    {
        //dd($request->all());
        $this->validateWithBag('attach',$request, [
            'servicio_id' => 'required|exists:servicios,id',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date|after:fechainicio',
            'observaciones' => 'required|string',
            'duracion' => 'required|numeric|min:0',
        ]);
        $cita->servicios()->attach($request->servicio_id, [
            'fechaInicio' => $request->fechaInicio,
            'fechaFin' => $request->fechaFin,
            'observaciones' => $request->observaciones,
            'duracion' => $request->duracion
        ]);
        return redirect()->route('citas.edit', $cita->id);
    }
    public function detach_servicio(Cita $cita, Servicio $servicio)
    {
        $cita->servicios()->detach($servicio->id);
        return redirect()->route('citas.edit', $cita->id);
    }
}




