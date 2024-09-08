<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incidencias')->insert([
            [
                'profesional_id' => 1,
                'familiar_id' => 1,
                'fecha' => "2022-05-25 17:19:00",
                'nombre' => 'Toma de medicación',
                'descripcion' => 'No se ha querido tomar la medicación de la tarde',
                'tipoIncidencia' => 'mensaje',
                'nivelGravedad' => '8',
            ],
            [
                'profesional_id' => 2,
                'familiar_id' => 2,
                'fecha' => "2022-05-25 09:30:00",
                'nombre' => 'Caída',
                'descripcion' => 'El paciente se ha caído de la silla, no le ha pasado nada, se encuentra bien ',
                'tipoIncidencia' => 'incidencia',
                'nivelGravedad' => '7',
            ],
        ]);
        
    }
}
