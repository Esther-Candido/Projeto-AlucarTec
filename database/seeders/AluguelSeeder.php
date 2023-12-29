<?php

namespace Database\Seeders;

use App\Models\Aluguel;
use App\Models\Carro;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AluguelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Função para criar as relaçoes do carro com um cliente em cada aluguel de veiculos de forma automatica
     *
     */
    public function run()
    {

/*
        //Gerar dados na BD de forma manual com insert
        $carros = Carro::all();  //pega todos os registros de carros do banco de dados
        $clientes = Cliente::all(); //pega todos os registros de clientes do banco de dados

        $carro = $carros->random();
        $cliente = $clientes->random();

        DB::table('aluguel')->insert([
            'id_carro' => $carro->id,
            'id_cliente' => $cliente->id,
            'data_inicio' => now(),
            'data_fim' => now(),
            'valor_total' => 150,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('aluguel')->insert([
            'id_carro' => $carro->id,
            'id_cliente' => $cliente->id,
            'data_inicio' => now()->addDays(random_int(1, 20)),
            'data_fim' => now(),
            'valor_total' => 150,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
*/



        //Automáticos com a factory
        Aluguel::factory(5)->create();

    }

}
