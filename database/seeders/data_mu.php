<?php

namespace Database\Seeders;

use App\Models\man_utd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class data_mu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            man_utd::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 99),
                'posisi' => fake()->numberBetween(100,999),
            ]);
        }
    }
}
