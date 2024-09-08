<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
            [
                'fechaNacimiento' => "1976-04-09",
                'tipo' => "Enfermero/a",
                'user_id' => 2,
                'incidencia_id' => 2
            ],
            [
                'fechaNacimiento' => "1988-03-07",
                'tipo' => "Auxiliar",
                'user_id' => 3,
                'incidencia_id' => 3
            ],
        ]);
    }
}
