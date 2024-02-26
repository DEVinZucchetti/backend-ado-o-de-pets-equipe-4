<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adoption>
 */
class AdoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name,
            'email' =>  fake()->unique()->safeEmail(),
            'cpf' => fake()->numerify('###########'),
            'contact' => fake()->phoneNumber(),
            'observations' => fake()->text(),
            'status' => 'PENDENTE'
        ];
    }
}
