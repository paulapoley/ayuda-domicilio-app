<?php

namespace App\Http\Controllers;

use App\Models\Profesional;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreProfesionalRequest;
use App\Http\Requests\UpdateProfesionalRequest;


class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesionals = Profesional::paginate(25);
        return view('/profesionals/index', ['profesionals' => $profesionals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesionals = Profesional::all();
        return view('profesionals/create', ['profesionals' => $profesionals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfesionalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfesionalRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:25|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'fechaNacimiento' => 'required|date',
            'tipo' => [
                'required',
                Rule::in(['Enfermero/a', 'Auxiliar']),
                
            ], 
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $profesional = new Profesional($request->all());
        $profesional->user_id = $user->id;
        $profesional->save();
        session()->flash('success', 'Profesional creado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('profesionals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function show(Profesional $profesional)
    {
        $profesionals = Profesional::all();
        return view('profesionals/show', ['profesional' => $profesional]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesional $profesional)
    {
        $profesionals = Profesional::all();
        return view('profesionals/edit', ['profesional' => $profesional]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfesionalRequest  $request
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfesionalRequest $request, Profesional $profesional)
    {
       //dd($request->all());
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:25',
            'fechaNacimiento' => 'required|date',
            'tipo' => [
                'required',
                Rule::in(['Enfermero/a', 'Auxiliar']),
            ],      
        ]);
        $user = $profesional->user;
        $user->fill($request->all());
        $user->save();
        $profesional->fill($request->all());
        $profesional->save();
        session()->flash('success', 'Profesional modificado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('profesionals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesional $profesional)
    {
        if($profesional->delete()) {
            session()->flash('success', 'Profesional borrado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        }
        else{
            session()->flash('warning', 'No pudo borrarse el profesional.');
        }
        return redirect()->route('profesionals.index');
    }
}
