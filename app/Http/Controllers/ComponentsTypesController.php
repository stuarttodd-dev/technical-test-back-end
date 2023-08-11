<?php

namespace app\Http\Controllers;

use app\Actions\GetFarms;
use app\Actions\GetFarmTurbines;
use Illuminate\Http\JsonResponse;

class ComponentsTypesController extends Controller
{
    public function index(GetFarms $action, ?int $farmId = null): JsonResponse
    {
        $data = $action($farmId);

        return response()->json($data, 200);
    }

    public function turbines(GetFarmTurbines $action, int $farmId, ?int $turbineId = null): JsonResponse
    {
        $data = $action($farmId, $turbineId);

        return response()->json($data, 200);
    }

}
