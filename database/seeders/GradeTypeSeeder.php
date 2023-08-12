<?php

namespace Database\Seeders;

use App\Models\GradeType;
use Illuminate\Database\Seeder;

class GradeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($gradeTypeId = 1; $gradeTypeId <= 5; $gradeTypeId++) {
            GradeType::factory()->create([
                'name' => 'Level ' . $gradeTypeId . ' Grade'
            ]);
        }
    }
}
