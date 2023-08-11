<?php

namespace Tests\Feature;

use App\Models\Inspection;
use App\Models\Turbine;
use App\Models\GradeType;
use App\Models\Grade;
use App\Models\Component;
use App\Models\ComponentType;
use App\Models\Farm;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EndpointTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_turbine_endpoints_return_successful_responses()
    {
        $turbine = Turbine::with('components', 'inspections')
            ->has('components')
            ->has('inspections')
            ->first();

        $turbineId = $turbine->id;
        $componentId = $turbine->components->first()->id;
        $inspectionId = $turbine->inspections->first()->id;

        $response = $this->get('/api/turbines');
        $response->assertStatus(200);

        $response = $this->get('/api/turbines/' . $turbineId);
        $response->assertStatus(200);

        $response = $this->get('/api/turbines/' . $turbineId . '/components');
        $response->assertStatus(200);

        $response = $this->get('/api/turbines/' . $turbineId . '/components/' . $componentId);
        $response->assertStatus(200);

        $response = $this->get('/api/turbines/' . $turbineId . '/inspections');
        $response->assertStatus(200);

        $response = $this->get('/api/turbines/' . $turbineId . '/inspections/' . $inspectionId);
        $response->assertStatus(200);
    }

    public function test_inspection_endpoints_return_successful_responses()
    {
        $inspection = Inspection::with('grades')
            ->has('grades')
            ->first();

        $inspectionId = $inspection->id;
        $gradeId = $inspection->grades->first()->id;

        $response = $this->get('/api/inspections/' . $inspectionId . '/grades');
        $response->assertStatus(200);

        $response = $this->get('/api/inspections/' . $inspectionId . '/grades/' . $gradeId);
        $response->assertStatus(200);
    }

    public function test_grade_type_endpoints_return_successful_responses()
    {
        $gradeType = GradeType::first();
        $gradeTypeId = $gradeType->id;

        $response = $this->get('/api/grade-types');
        $response->assertStatus(200);

        $response = $this->get('/api/grade-types/' . $gradeTypeId);
        $response->assertStatus(200);
    }

    public function test_grade_endpoints_return_successful_responses()
    {
        $grade = Grade::first();
        $gradeId = $grade->id;

        $response = $this->get('/api/grades');
        $response->assertStatus(200);

        $response = $this->get('/api/grades/' . $gradeId);
        $response->assertStatus(200);
    }

    public function test_farm_endpoints_return_successful_responses()
    {
        $farm = Farm::with('turbines')
            ->has('turbines')
            ->first();

        $farmId = $farm->id;
        $turbineId = $farm->turbines->first()->id;

        $response = $this->get('/api/farms');
        $response->assertStatus(200);

        $response = $this->get('/api/farms/' . $farmId);
        $response->assertStatus(200);

        $response = $this->get('/api/farms/' . $farmId . '/turbines');
        $response->assertStatus(200);

        $response = $this->get('/api/farms/' . $farmId . '/turbines/' . $turbineId);
        $response->assertStatus(200);
    }

    public function test_component_types_endpoints_return_successful_responses()
    {
        $componentType = ComponentType::first();
        $componentTypeId = $componentType->id;

        $response = $this->get('/api/component-types');
        $response->assertStatus(200);

        $response = $this->get('/api/component-types/' . $componentTypeId);
        $response->assertStatus(200);
    }

    public function test_component_endpoints_return_successful_responses()
    {
        $component = Component::with('grades')
            ->has('grades')
            ->first();

        $componentId = $component->id;
        $gradeId = $component->grades->first()->id;

        $response = $this->get('/api/components');
        $response->assertStatus(200);

        $response = $this->get('/api/components/' . $componentId);
        $response->assertStatus(200);

        $response = $this->get('/api/components/' . $componentId . '/grades');
        $response->assertStatus(200);

        $response = $this->get('/api/components/' . $componentId . '/grades/' . $gradeId);
        $response->assertStatus(200);
    }
}
