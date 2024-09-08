<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citas')->insert([
            [
                'profesional_id' => 1,
                'familiar_id' => 1,
                //'paciente_id' => 1,
                'fechaHoraInicio' => '2022/07/23 11:30:00',
                'fechaHoraFin' => '2022/07/23 12:00:00',
                'descripcion' => 'Toma de tensión arterial',
                'observaciones' => 'La cita ha ido correctamente. Tiene la tensión normal',
            ],
            [
                'profesional_id' => 1,
                'familiar_id' => 2,
                //'paciente_id' => 2,
                'fechaHoraInicio' => '2022/08/20 08:20:00',
                'fechaHoraFin' => '2022/08/20 08:50:00',
                'descripcion' => 'Toma de tensión arterial',
                'observaciones' => 'Presión arterial alta',
            ],
            [
                'profesional_id' => 2,
                'familiar_id' => 2,
                //'paciente_id' => 2,
                'fechaHoraInicio' => '2022/06/19 12:32:00',
                'fechaHoraFin' => '2022/06/19 13:02:00',
                'descripcion' => 'Toma de tensión arterial',
                'observaciones' => 'Presión arterial baja (hipotensión)',
           
            ],
        ]);
        DB::table('cita_servicio')->insert([
            [
                'cita_id' => 1,
                'servicio_id' => 1,
                'fechaInicio' => '2022/10/01',
                'fechaFin' => '2022/12/18',
                'observaciones' => 'Solo lavar ropa clara',
                'duracion' => 3,
                
            ],
            [
                'cita_id' => 2,
                'servicio_id' => 2,
                'fechaInicio' => '2022/06/30',
                'fechaFin' => '2022/07/15',
                'observaciones' => 'Donar la ropa no utilzada',
                'duracion' => 3,
            ],
            [
                'cita_id' => 3,
                'servicio_id' => 1,
                'fechaInicio' => '2022/06/30',
                'fechaFin' => '2022/07/10',
                'observaciones' => 'Se especifica la compra de alimentos sin gluten',
                'duracion' => 1,
            ],
        ]);
    }
}
