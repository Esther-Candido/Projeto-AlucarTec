<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClienteSeeder extends Seeder
{
    /**
     * Funcao usada de factory para criar dados ficticions na BD
     */
    public function run(): void
    {

        /*
        //Dados inseridos manualmente na BD com insert
        DB::table('clientes')->insert([
            'nome' => 'Eliseu Candido',
            'num_carta_conducao' => '9875588 AA2',
            'telemovel' => '900100200',
            'email' => 'eliseu@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Esther Candido',
            'num_carta_conducao' => '9883334 AA3',
            'telemovel' => '900100300',
            'email' => 'esther@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Ruben Alves',
            'num_carta_conducao' => '4353453 AA',
            'telemovel' => '900100400',
            'email' => 'ruben@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

*/



        //Automáticos com a factory
        Cliente::factory(5)->create();

    }
}
