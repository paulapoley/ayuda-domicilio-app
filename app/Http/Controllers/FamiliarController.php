<?php

namespace App\Http\Controllers;

use App\Models\Familiar;
use App\Models\User;
use App\Http\Requests\StoreFamiliarRequest;
use App\Http\Requests\UpdateFamiliarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class FamiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familiars = Familiar::paginate(25);
        return view('/familiars/index', ['familiars' => $familiars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('familiars/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFamiliarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFamiliarRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:25|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'direccion' => 'required|string|max:255',

        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $familiar = new Familiar($request->all());
        $familiar->user_id = $user->id;
        $familiar->save();
        session()->flash('success', 'Familiar creado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('familiars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function show(Familiar $familiar)
    {
        return view('familiars/show', ['familiar' => $familiar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function edit(Familiar $familiar)
    {
        return view('familiars/edit', ['familiar' => $familiar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFamiliarRequest  $request
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familiar $familiar)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:25',
            'direccion' => 'required|string|max:255',
        ]);
        $user = $familiar->user;
        $user->fill($request->all());
        $user->save();
        $familiar->fill($request->all());
        $familiar->save();
        session()->flash('success', 'Familiar modificado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        return redirect()->route('familiars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familiar $familiar)
    {
        if($familiar->delete()) {
            session()->flash('success', 'Familiar borrado correctamente. Si nos da tiempo haremos este mensaje internacionalizable y parametrizable');
        }
        else{
            session()->flash('warning', 'El familiar no pudo borrarse.');
        }
        return redirect()->route('familiars.index');
    }
}
