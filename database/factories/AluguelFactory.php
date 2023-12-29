<?php

namespace Database\Factories;

use App\Models\Aluguel;
use App\Models\Carro;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluguel>
 */
class AluguelFactory extends Factory
{


    protected $model = Aluguel::class;

    /**
     * Define os valores padrão para criar uma instância de Aluguel.
     * - Associa um Carro aleatório.
     * - Associa um Cliente aleatório.
     * - Define datas aleatórias para início e fim do aluguel.
     * - Define um valor aleatório para o total do aluguel.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carros = Carro::all(); //pega todos os registros de carros do banco de dados
        $clientes = Cliente::all(); //pega todos os registros de clientes do banco de dados

        $carro = $carros->random();   //aleatorio de carros
        $cliente = $clientes->random();  //aleatorio de clientes

        //retorna a estrutura com as definiçoes fake e aleatorias
        return [
            'id_carro' => $carro->id,
            'id_cliente' => $cliente->id,
            'data_inicio' => $this->faker->date,
            'data_fim' => $this->faker->date,
            'valor_total' => $this->faker->randomFloat(8000, 599990, 500000),
       ];
    }



}
