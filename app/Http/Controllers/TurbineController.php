<?php

namespace App\Http\Controllers;

use App\Actions\GetTurbineComponents;
use App\Actions\GetTurbineInspections;
use App\Actions\GetTurbines;
use Illuminate\Http\JsonResponse;

class TurbineController extends Controller
{
    public function index(GetTurbines $action, ?int $turbineId = null): JsonResponse
    {
        $data = $action($turbineId);

        return response()->json($data, 400);
    }

    public function components(GetTurbineComponents $action, int $turbineId, ?int $componentId = null): JsonResponse
    {
        $data = $action($turbineId, $componentId);

        return response()->json($data, 200);
    }

    public function inspections(GetTurbineInspections $action, int $turbineId, ?int $inspectionId = null): JsonResponse
    {
        $data = $action($turbineId, $inspectionId);

        return response()->json($data, 200);
    }

}
