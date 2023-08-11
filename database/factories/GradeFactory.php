<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'inspection_id' => $this->faker->numberBetween(1, 200),
            'component_id' => $this->faker->numberBetween(1, 50),
            'grade_type_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
