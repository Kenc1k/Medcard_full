<?php

namespace Database\Factories;

use App\Models\Tuman;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tuman>
 */
class TumanFactory extends Factory
{
    protected $model = Tuman::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->city(),
            'viloyat_id'=>rand(1,10),
        ];
    }
}
