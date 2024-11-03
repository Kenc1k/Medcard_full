<?php

namespace Database\Factories;

use App\Models\Klinika;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klinika>
 */
class KlinikaFactory extends Factory
{
    protected $model = Klinika::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->firstName(),
            'hudud'=>$this->faker->city(),
            'info'=>$this->faker->text(),
        ];
    }
}
