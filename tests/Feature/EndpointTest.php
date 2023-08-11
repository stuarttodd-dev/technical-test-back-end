<?php

namespace Tests\Feature;

use App\Models\Turbine;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EndpointTest extends TestCase
{
    use RefreshDatabase;

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
        $turbineId = 1;
        $componentId = 1;
        $inspectionId = 1;

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
        $inspectionId = 1;
        $gradeId = 1;

        $response = $this->get('/api/inspections/' . $inspectionId . '/grades');
        $response->assertStatus(200);

        $response = $this->get('/api/inspections/' . $inspectionId . '/grades/' . $gradeId);
        $response->assertStatus(200);
    }

    public function test_grade_type_endpoints_return_successful_responses()
    {
        $gradeTypeId = 1;

        $response = $this->get('/api/grade-types');
        $response->assertStatus(200);

        $response = $this->get('/api/grade-types/' . $gradeTypeId);
        $response->assertStatus(200);
    }

    public function test_grade_endpoints_return_successful_responses()
    {
        $gradeId = 1;

        $response = $this->get('/api/grades');
        $response->assertStatus(200);

        $response = $this->get('/api/grades/' . $gradeId);
        $response->assertStatus(200);
    }

    public function test_farm_endpoints_return_successful_responses()
    {
        $farmId = 1;
        $turbineId = 1;

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
        $componentTypeId = 1;

        $response = $this->get('/api/component-types');
        $response->assertStatus(200);

        $response = $this->get('/api/component-types/' . $componentTypeId);
        $response->assertStatus(200);
    }

    public function test_component_endpoints_return_successful_responses()
    {
        $componentId = 1;
        $gradeId = 1;

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
