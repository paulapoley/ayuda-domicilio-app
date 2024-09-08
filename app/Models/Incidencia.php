<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    protected $fillable = ['fecha', 'nombre','descripcion', 'tipoIncidencia', 'nivelGravedad','familiar_id', 'profesional_id'];

    protected $casts = [
        'fecha' => 'datetime:Y/m/d H:i:s'
    ];

    #Relaciones

    #Relación (N:1) Indicencia-Profesional
    public function profesionals(){
        return $this->belongsTo(Profesional::class);
    }
    #Relación (N:1) Indicencia-Paciente
    //public function paciente(){
    //    return $this->belongsTo(Paciente::class);
    //}

    #Relación (N:1) Indicencia-Familiar
    public function familiar(){
        return $this->belongsTo(Familiar::class);
    }
}
