<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profesional;
use App\Models\Familiar;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function create_profesional()
    {
        $profesionals = Profesional::all();
        return view('auth.register-profesional', ['profesionals' => $profesionals]);
    }
    

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:25|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'tipo_usuario_id' => 'required|numeric'
        ];

        $tipo_usuario_id = intval($request->tipo_usuario_id);
        if($tipo_usuario_id == 1){
            //Profesional
            $reglas_profesional = ['fechaNacimiento' => 'required|date'
            ];
            $rules = array_merge($reglas_profesional, $rules);
        }
        elseif($tipo_usuario_id == 2){
            //Familiar
            $reglas_familiar = ['direccion' => 'string'];
            $rules = array_merge($reglas_familiar, $rules);
        }
        $request->validate($rules);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($tipo_usuario_id == 1) {
            //Profesional
            $profesional = new Profesional($request->all());
            $profesional->user_id = $user->id;
            $profesional->save();
        }
        elseif($tipo_usuario_id == 2){
            //Familiar
            $familiar = new Familiar($request->all());
            $familiar->user_id = $user->id;
            $familiar->save();
        }
        $user->fresh();
        Auth::login($user);
        event(new Registered($user));
        return redirect(RouteServiceProvider::HOME);
    }
}
