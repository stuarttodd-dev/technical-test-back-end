<?php

namespace App\Http\Controllers;

use App\Actions\GetComponentGrades;
use App\Actions\GetComponents;
use App\Http\Resources\ApiResource;

class ComponentsController extends Controller
{
    public function index(GetComponents $action, ?int $componentId = null): ApiResource
    {
        return new ApiResource($action($componentId));
    }

    public function grades(GetComponentGrades $action, int $componentId, ?int $gradeId = null): ApiResource
    {
        return new ApiResource($action($componentId, $gradeId));
    }

}
