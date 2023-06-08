<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Knjiga>
 */
class KnjigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Naziv' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
            'Zanr' => $this->faker->sentence($nbWords = 1),
            'Opis' => $this->faker->paragraph($nbSentences = 3),
            'Pisac' => $this->faker->name(),
        ];
    }
}