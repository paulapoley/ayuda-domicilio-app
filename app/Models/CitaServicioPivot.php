<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;


class CitaServicioPivot extends Pivot
{
    use HasFactory;

    protected $fillable = ['fechaInicio', 'fechaFin', 'observaciones', 'duracion'];
    protected $dates = ['fechaInicio', 'fechaFin'];

    protected $cast=[
        'fechaInicio' => 'date: Y/m/d',
        'fechaFin' => 'date: Y/m/d',
    ];
}
