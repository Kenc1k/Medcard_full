<?php

namespace Database\Factories;

use App\Models\Viloyat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Viloyat>
 */
class ViloyatFactory extends Factory
{
    protected $model = Viloyat::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->country(),
        ];
    }
}
