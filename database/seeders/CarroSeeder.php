<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarroSeeder extends Seeder
{

    /**
     * Funcao usada de factory para criar dados ficticions na BD
     */
    public function run(): void
    {

/*
        DB::table('carros')->insert([
            'modelo' => 'Carro Modelo 2',
            'marca' => 'Marca 2',
            'ano' => 2020,
            'matricula' => 'ABC-123',
            'status' => 'disponivel',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carros')->insert([
            'modelo' => 'Carro Modelo 3',
            'marca' => 'Marca 3',
            'ano' => 2021,
            'matricula' => 'XYZ-789',
            'status' => 'disponivel',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carros')->insert([
            'modelo' => 'Carro Modelo 4',
            'marca' => 'Marca 4',
            'ano' => 2022,
            'matricula' => 'XYZ-910',
            'status' => 'alugado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carros')->insert([
            'modelo' => 'Carro Modelo 5',
            'marca' => 'Marca 5',
            'ano' => 2023,
            'matricula' => 'XYZ-101',
            'status' => 'alugado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

*/


        //Automáticos com a factory
        Carro::factory(5)->create();


    }
}
