<?php

namespace App\Http\Controllers;

use App\Actions\GetTurbineComponents;
use App\Actions\GetTurbineInspections;
use App\Actions\GetTurbines;
use App\Http\Resources\ApiResource;

class TurbineController extends Controller
{
    public function index(GetTurbines $action, ?int $turbineId = null): ApiResource
    {
        return new ApiResource($action($turbineId));
    }

    public function components(GetTurbineComponents $action, int $turbineId, ?int $componentId = null): ApiResource
    {
        return new ApiResource($action($turbineId, $componentId));
    }

    public function inspections(GetTurbineInspections $action, int $turbineId, ?int $inspectionId = null): ApiResource
    {
        return new ApiResource($action($turbineId, $inspectionId));
    }

}
