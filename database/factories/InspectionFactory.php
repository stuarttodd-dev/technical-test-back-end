<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspection>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'turbine_id' => $this->faker->numberBetween(1, 100),
            'inspected_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
