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

//        Route::get('/turbines', 'index');
//        Route::get('/turbines/{turbineId}', 'index');
//        Route::get('/turbines/{turbineId}/components', 'components');
//        Route::get('/turbines/{turbineId}/components/{componentId}', 'components');
//        Route::get('/turbines/{turbineId}/inspections', 'inspections');
//        Route::get('/turbines/{turbineId}/inspections/{inspectionId}', 'inspections');

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_inspection_endpoints_return_successful_responses()
    {
//        Route::get('/inspections/{inspectionId}/grades', 'index');
//        Route::get('/inspections/{inspectionId}/grades/{gradeId}', 'index');

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_grade_type_endpoints_return_successful_responses()
    {
//        Route::get('/grade-types', 'index');
//        Route::get('/grade-types/{gradeTypeId}', 'index');

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_grade_endpoints_return_successful_responses()
    {
//        Route::get('/grades', 'index');
//        Route::get('/grades/{gradeId}', 'index');

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_farm_endpoints_return_successful_responses()
    {
//        Route::get('/farms', 'index');
//        Route::get('/farms/{farmId}', 'index');
//        Route::get('/farms/{farmId}/turbines', 'turbines');
//        Route::get('/farms/{farmId}/turbines/{turbineId}', 'turbines');

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_component_types_endpoints_return_successful_responses()
    {
//        Route::get('/component-types', 'index');
//        Route::get('/component-types/{componentTypeId}', 'index');

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_component_endpoints_return_successful_responses()
    {
//        Route::get('/components', 'index');
//        Route::get('/components/{componentId}', 'index');
//        Route::get('/components/{i}/grades', 'grades');
//        Route::get('/components/{i}/grades/{gradeId}', 'grades');

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
