<?php

namespace Tests\Unit;

use App\Models\Component;
use App\Models\ComponentType;
use App\Models\Farm;
use App\Models\Grade;
use App\Models\GradeType;
use App\Models\Inspection;
use App\Models\InspectionGrade;
use App\Models\Turbine;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Actions\GetTurbines;
use App\Actions\GetComponentGrades;
use App\Actions\GetComponents;
use App\Actions\GetComponentTypes;
use App\Actions\GetFarms;
use App\Actions\GetFarmTurbines;
use App\Actions\GetGrades;
use App\Actions\GetGradeTypes;
use App\Actions\GetInspectionGrades;
use App\Actions\GetInspections;
use App\Actions\GetTurbineComponents;
use App\Actions\GetTurbineInspections;

class ActionClassTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }

    public function test_get_component_grades_returns_expected_response()
    {
        $action = new GetComponentGrades;

        $grade = Grade::first();
        $componentId = $grade->component_id;

        $componentGrades = Grade::where('component_id', $componentId)
            ->get();

        $response = $action($componentId);
        $this->assertEquals($response->count(), $componentGrades->count());

        $response = $action($componentId, $response->first()->id);

        $expectedKeys = [
            'id',
            'inspection_id',
            'component_id',
            'grade_type_id',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_components_returns_expected_response()
    {
        $action = new GetComponents;

        $components = Component::all();
        $response = $action();

        $this->assertEquals($response->count(), $components->count());

        $component = $components->first();

        $response = $action($component->id);

        $expectedKeys = [
            'id',
            'component_type_id',
            'turbine_id',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_component_types_returns_expected_response()
    {
        $action = new GetComponentTypes;

        $componentTypes = ComponentType::all();
        $response = $action();

        $this->assertEquals($response->count(), $componentTypes->count());

        $componentType = $componentTypes->first();

        $response = $action($componentType->id);

        $expectedKeys = [
            'id',
            'name',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_farms_returns_expected_response()
    {
        $action = new GetFarms;

        $farms = Farm::all();
        $response = $action();

        $this->assertEquals($response->count(), $farms->count());

        $farm = $farms->first();

        $response = $action($farm->id);

        $expectedKeys = [
            'id',
            'name',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_farm_turbines_returns_expected_response()
    {
        $action = new GetFarmTurbines;

        $turbine = Turbine::first();
        $farmId = $turbine->farm_id;

        $farmTurbines = Turbine::where('farm_id', $farmId)
            ->get();

        $response = $action($farmId);
        $this->assertEquals($response->count(), $farmTurbines->count());

        $response = $action($farmId, $response->first()->id);

        $expectedKeys = [
            'id',
            'name',
            'farm_id',
            'lat',
            'lng',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_grades_returns_expected_response()
    {
        $action = new GetGrades;

        $grades = Grade::all();
        $response = $action();

        $this->assertEquals($response->count(), $grades->count());

        $grade = $grades->first();

        $response = $action($grade->id);

        $expectedKeys = [
            'id',
            'inspection_id',
            'component_id',
            'grade_type_id',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_grade_types_returns_expected_response()
    {
        $action = new GetGradeTypes;

        $gradeTypes = GradeType::all();
        $response = $action();

        $this->assertEquals($response->count(), $gradeTypes->count());

        $gradeType = $gradeTypes->first();

        $response = $action($gradeType->id);

        $expectedKeys = [
            'id',
            'level',
            'name',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_inspection_grades_returns_expected_response()
    {
        $action = new GetInspectionGrades;

        $inspectionGrade = Grade::first();
        $inspectionId = $inspectionGrade->inspection_id;

        $inspectionGrades = Grade::where('inspection_id', $inspectionId)
                ->get();

        $response = $action($inspectionId);

        $this->assertEquals($response->count(), $inspectionGrades->count());

        $response = $action($inspectionId, $response->first()->id);

        $expectedKeys = [
            'id',
            'inspection_id',
            'component_id',
            'grade_type_id',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_inspections_returns_expected_response()
    {
        $action = new GetInspections;

        $inspections = Inspection::all();
        $response = $action();

        $this->assertEquals($response->count(), $inspections->count());

        $inspection = $inspections->first();

        $response = $action($inspection->id);

        $expectedKeys = [
            'id',
            'turbine_id',
            'inspected_at',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_turbine_components_returns_expected_response()
    {
        $action = new GetTurbineComponents;

        $component = Component::first();
        $turbineId = $component->turbine_id;

        $turbineComponents = Component::where('turbine_id', $turbineId)
            ->get();

        $response = $action($turbineId);
        $this->assertEquals($response->count(), $turbineComponents->count());

        $response = $action($turbineId, $response->first()->id);

        $expectedKeys = [
            'id',
            'component_type_id',
            'turbine_id',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_turbine_inspections_returns_expected_response()
    {
        $action = new GetTurbineInspections;

        $tubrineId = 1;

        $turbineInspections = Inspection::where('turbine_id', $tubrineId)
            ->get();

        $response = $action($tubrineId);
        $this->assertEquals($response->count(), $turbineInspections->count());

        $response = $action($tubrineId, $response->first()->id);

        $expectedKeys = [
            'id',
            'turbine_id',
            'inspected_at',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }

    public function test_get_turbines_returns_expected_response()
    {
        $action = new GetTurbines;

        $turbines = Turbine::all();
        $response = $action();

        $this->assertEquals($response->count(), $turbines->count());

        $turbine = $turbines->first();

        $response = $action($turbine->id);

        $expectedKeys = [
            'id',
            'name',
            'farm_id',
            'lat',
            'lng',
            'created_at',
            'updated_at',
        ];

        $this->assertEquals($response->keys()->toArray(), $expectedKeys);
    }
}
