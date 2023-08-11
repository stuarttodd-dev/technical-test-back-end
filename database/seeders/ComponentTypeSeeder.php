<?php

namespace Database\Seeders;

use App\Models\ComponentType;
use Illuminate\Database\Seeder;

use App\Enums\ComponentType as ComponentTypeEnum;

class ComponentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $components = [
            ComponentTypeEnum::BLADE->value,
            ComponentTypeEnum::GENERATOR->value,
            ComponentTypeEnum::HUB->value,
            ComponentTypeEnum::ROTOR->value,
        ];

        foreach ($components as $component) {
            ComponentType::factory()->create([
                'name' => $component
            ]);
        }
    }
}
