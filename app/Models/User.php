<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profesional() {
        return $this->hasOne(Profesional::class);
    }

    public function familiar(){
        return $this->hasOne(Familiar::class);
    }

    /* Las funciones que se llaman getXXXXAttribute se llaman accesors y
     permiten su acceso mediante llamada como parámetro mágico:
    $user->tipo_usuario_id
    (https://laravel.com/docs/8.x/eloquent-mutators)
    */
    public function getTipoUsuarioIdAttribute(){
        if ($this->profesional()->exists()){
            return 1;
        }
        elseif($this->familiar()->exists()){
            return 2;
        }
        else{
            return 3;
        }
    }

    public function getTipoUsuarioAttribute(){
        $tipos_usuario = [1 => trans('Profesional'), 2 => trans('Familiar'), 3 => trans('Administrador')];
        return $tipos_usuario[$this->tipo_usuario_id];
    }
}
