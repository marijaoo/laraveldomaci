<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pozajmica>
 */
class PozajmicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clan_id' => $this->faker->randomDigitNot(0),
            'knjiga_id' => $this->faker->randomDigitNot(0),
            'DaniPozajmljivanja' => $this->faker->randomNumber($nbDigits = 2),
            'DatumVracanja' => $this->faker->dateTimeThisYear()

        ];
    }
}