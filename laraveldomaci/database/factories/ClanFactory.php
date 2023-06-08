<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clan>
 */
class ClanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Ime' => $this->faker->name(),
            'Prezime' => $this->faker->lastName(),
            'ClanskaKarta' => $this->faker->numerify('#########'),
            'DatumIsteka' => $this->faker->dateTimeThisYear()
        ];
    }
}