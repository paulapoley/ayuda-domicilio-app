<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    use HasFactory;
    protected $fillable = ['fechaNacimiento', 'tipo'];

    protected $casts = [
        'fechaNacimiento' => 'date:Y/m/d'
    ];


    #RELACIONES

    #Relación (1:N) Profesional-Cita
    public function citas(){
        return $this->hasMany(Cita::class);
    }

    #Relación (1:N) Profesional-Paciente
    //public function paciente(){
    //    return $this->hasMany(Paciente::class);
    //}

    #Relación (1:N) Profesional-Incidencia
    public function incidencia(){
        return $this->hasMany(Incidencia::class);
    }
    
    public function farmiliars(){
        return $this->hasManyThrough(Familiar::class, Cita::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
