<?php

namespace Database\Seeders;

use App\Models\Viloyat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViloyatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Viloyat::factory(10)->create();
    }
}
