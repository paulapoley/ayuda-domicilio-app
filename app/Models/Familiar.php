<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use HasFactory;

    protected $fillable = ['direccion'];

    #RELACIONES

    #Relación (1:N) Familiar-Incidencia
    //public function incidencias(){
    //    return $this->hasMany(Incidencia::class);
    //}

    #Relación (1:1) Familiar-Paciente
    //public function paciente(){
    //    return $this->hasOne(Paciente::class);
    //}
    public function citas(){
        return $this->hasMany(Cita::class);
    }

    public function profesionals(){
        return $this->hasManyThrough(Profesional::class, Cita::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
