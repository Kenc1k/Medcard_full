<?php

namespace Database\Seeders;

use App\Models\Klinika;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KlinikaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Klinika::factory(10)->create();
    }
}
