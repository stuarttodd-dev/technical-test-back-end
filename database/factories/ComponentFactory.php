<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Component>
 */
class ComponentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'component_type_id' => $this->faker->numberBetween(1, 4),
            'turbine_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
