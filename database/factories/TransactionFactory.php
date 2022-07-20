<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
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
            'id_user' => User::all()->random()->id,
            'id_driver' => $this->faker->randomElement([Driver::all()->random()->id, null]),
            'id_admin' => $this->faker->randomElement([Driver::all()->random()->id, null]),
            'is_sampah_edited' => $this->faker->randomElement(['belum_diverifikasi', 'sampai_gudang', 'sedang_diambil', 'selesai', 'sudah_diambil', 'sudah_diverifikasi']),
            'tanggal_ambil' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
