<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JenisSampahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word(),
            'harga' => $this->faker->random_int(10, 30),
            'isOrganik' => $this->faker->randomElement([0, 1]),
        ];
    }
}
