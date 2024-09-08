<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamiliarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('familiars')->insert([
            [
                'direccion' => 'Avenida Reina Mercedes, 18, Sevilla ',
                'user_id' => 4,
            ],
            [
                'direccion' => 'Calle Torcuato Luca de Tena, 3, Sevilla',
                'user_id' => 5,
            ],
        ]);
    }
}
