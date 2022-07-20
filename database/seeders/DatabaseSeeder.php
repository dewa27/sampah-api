<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Transaksi;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        Driver::factory()->count(5)->create();
        Admin::factory()->count(5)->create();
        // Transaksi::factory()->count(50)->create()->each(function ($transaksi) {
        // });
    }
}
