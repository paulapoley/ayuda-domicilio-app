<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        f(Auth::user()->tipo_usuario_id == 1){
            return view('servicios/create', ['profesional' => Auth::user()->profesional, 'familiars' => $familiars]);
        }
        return view('servicios/create', ['familiars' => $familiars, 'profesionals' => $profesionals]);
    
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
