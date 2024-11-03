<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    protected $model = Doctor::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone'=>$this->faker->phoneNumber(),
            'role'=>$this->faker->jobTitle(),
            'info'=>$this->faker->text(),
            'is_active'=>$this->faker->boolean(),
            'klinika_id'=>rand(1,10),
        ];
    }
}
