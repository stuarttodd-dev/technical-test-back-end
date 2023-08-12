<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\ComponentType;
use App\Models\Farm;
use App\Models\Grade;
use App\Models\GradeType;
use App\Models\Inspection;
use App\Models\Turbine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FarmSeeder::class,
            TurbineSeeder::class,
            ComponentTypeSeeder::class,
            GradeTypeSeeder::class,
        ]);

        $components = [];

        for ($turbineId = 1; $turbineId <= 500; $turbineId++) {

            $componentTypes = [1, 2, 3, 4];

            Inspection::factory()->create([
                'turbine_id' => $turbineId,
            ]);

            foreach ($componentTypes as $componentTypeId) {

                    $component = Component::factory()->create([
                        'component_type_id' => $componentTypeId,
                        'turbine_id' => $turbineId,
                    ]);
                    $components[$component->id] = $turbineId;
            }
        }

        foreach ($components as $componentId => $turbineId) {

            Grade::factory()->create([
                'component_id' => $componentId,
                'inspection_id' => $turbineId
            ]);
        }

    }
}
