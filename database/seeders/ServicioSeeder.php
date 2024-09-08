<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            [
                'nombre' => "Preparación de alimentos en el domicilio",
            ],
            [
                'nombre' => "Compra de alimentos",
            ],
            [
                'nombre' => "Lavado de ropa",
            ],
            [
                'nombre' => "Repaso y ordenación de ropa",
            ],
        ]);
    }
}
