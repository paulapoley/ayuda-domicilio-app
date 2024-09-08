<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Administrador",
                'email' => "administrador@administrador.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Profesional 1",
                'email' => "profesional1@prof.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Profesional 2",
                'email' => "profesional2@prof.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Familiar 1",
                'email' => "familiar1@fam.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Familiar 2",
                'email' => "familiar2@fam.com",
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
