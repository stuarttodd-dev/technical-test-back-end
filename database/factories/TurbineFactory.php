<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turbine>
 */
class TurbineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company() . ' Turbine',
            'farm_id' => $this->faker->numberBetween(1, 10),
            'lat' => $this->faker->latitude(),
            'lng' => $this->faker->longitude(),
        ];
    }
}
