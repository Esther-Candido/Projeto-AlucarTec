<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{

    protected $model = Cliente::class;
    protected $table = 'clientes';

    /**
     * Define os valores padrão para criar uma instância de Cliente.
     * - Gera um nome aleatório.
     * - Gera um número de carta de condução aleatório.
     * - Gera um número de telemóvel aleatório.
     * - Gera um email aleatório.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'num_carta_conducao' => $this->faker->regexify('[A-Z]{2}-[0-9]{2}-[0-9]{3}'),
            'telemovel' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
        ];
    }
}


