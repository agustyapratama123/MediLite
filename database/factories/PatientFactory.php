<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null, // tidak membuat user
            'nik' => $this->faker->unique()->numerify('########' . rand(10000000, 99999999)),
            'no_bpjs' => $this->faker->optional()->numerify('############'),
            'name' => $this->faker->name(),
            'birth_date' => $this->faker->date('Y-m-d', '2010-01-01'),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'address' => $this->faker->address(),
            'phone' => substr($this->faker->phoneNumber(), 0, 15),
            'email' => $this->faker->optional()->safeEmail(),
        ];
    }
}
