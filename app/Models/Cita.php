<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['fechaHoraInicio', 'fechaHoraFin', 'descripcion', 'observaciones','familiar_id', 'profesional_id'];
    protected $dates = ['fechaHoraInicio', 'fechaHoraFin'];

    protected $casts = [
        'fechaHoraInicio' => 'datetime:Y/m/d H:i:s',
        'fechaHoraFin' => 'datetime:Y/m/d H:i:s',
    ];

    #RELACIONES 

    #Relación (N:M) Cita-Servicio
    #me queda soucionar lo de linea servicio 
    public function servicios(){
        return $this->belongsToMany(Servicio::class)->using(CitaServicioPivot::class)->withPivot('fechaInicio', 'fechaFin','observaciones', 'duracion');
    }

    #Relación (N:1) Cita-Paciente
    //public function paciente(){
    //    return $this->belongsTo(Paciente::class);
    //}
    public function familiar(){
        return $this->belongsTo(Familiar::class);
    }

    #Relación (N:1) Cita-Profesional
    public function profesional(){
        return $this->belongsTo(Profesional::class);
    }


}
