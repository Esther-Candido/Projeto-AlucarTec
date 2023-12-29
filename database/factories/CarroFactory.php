<?php

namespace Database\Factories;

use App\Models\Carro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carro>
 */
class CarroFactory extends Factory
{


    protected $model = Carro::class;



    /**
     *Esta função é responsável por definir o estado padrão de um modelo
     *Retorna um array associativo que representa os valores padrão para os campos do modelo.
     *
     * @return array<string, mixed>
     */


    //modelo criaçao de um carro em dados ficticios
    public function definition()
    {
        return [
            'modelo' => $this->faker->randomElement(['Ibiza', 'Corolla', 'Civic', 'Uno', 'CR-V', 'Bugatti', 'Fit', 'Mustang', 'F-150', 'Cherokee', 'Fusca', 'Sonata']),
            'marca' => $this->faker->randomElement(['Seat', 'Ford', 'Chevrolet', 'Fiat', 'Jeep', 'Mazda', 'BMW', 'Audi', 'Kia', 'Hyundai', 'Nissan', 'Volkswagen', 'Mercedes-Benz']),
            'ano' => $this->faker->year,
            'matricula' => $this->faker->bothify('??-##-???'),
            'status' => $this->faker->randomElement(['disponivel', 'alugado']),
        ];
    }
}
