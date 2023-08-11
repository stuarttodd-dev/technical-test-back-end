<?php

namespace app\Http\Controllers;

use app\Actions\GetTurbineComponents;
use app\Actions\GetTurbineInspections;
use app\Actions\GetTurbines;
use Illuminate\Http\JsonResponse;

class TurbineController extends Controller
{
    public function index(GetTurbines $action, ?int $turbineId = null): JsonResponse
    {
        $data = $action($turbineId);

        return response()->json($data, 200);
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
