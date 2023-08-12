<?php

namespace App\Http\Controllers;

use App\Actions\GetTurbineComponents;
use App\Actions\GetTurbineInspections;
use App\Actions\GetTurbines;
use Illuminate\Support\Collection;

class TurbineController extends Controller
{
    public function index(GetTurbines $action, ?int $turbineId = null): Collection
    {
        return $action($turbineId);
    }

    public function components(GetTurbineComponents $action, int $turbineId, ?int $componentId = null): Collection
    {
        return $action($turbineId, $componentId);
    }

    public function inspections(GetTurbineInspections $action, int $turbineId, ?int $inspectionId = null): Collection
    {
        return $action($turbineId, $inspectionId);
    }

}
