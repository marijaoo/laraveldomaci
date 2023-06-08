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
            'ClanId' => $this->faker->randomDigitNot(0),
            'KnjigaId' => $this->faker->randomDigitNot(0),
            'BrojDanaPozajmice' => $this->faker->randomNumber($nbDigits = 2),
            'DatumVracanja' => $this->faker->dateTimeThisYear()

        ];
    }
}