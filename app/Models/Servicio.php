<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    #RELACIONES

    #Relación (N:M) Servicio-Cita
    #esta hay que corregir la linea servicio 
    public function citas(){
        return $this->belongsToMany(Cita::class)->withPivot('fechaInicio', 'fechaFin','observaciones', 'duracion');
    }
}
