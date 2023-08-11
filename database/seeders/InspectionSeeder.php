<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Inspection;

class InspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inspection::factory()->count(200)->create();
    }
}
