<?php

namespace App\Http\Controllers;

use App\Actions\GetFarms;
use App\Actions\GetFarmTurbines;
use Illuminate\Http\JsonResponse;

class FarmController extends Controller
{
    public function index(GetFarms $action, ?int $farmId = null): JsonResponse
    {
        $data = $action($farmId);
        return response()->json($data, $data->count() ? 200 : 400);
    }

    public function turbines(GetFarmTurbines $action, int $farmId, ?int $turbineId = null): JsonResponse
    {
        $data = $action($farmId, $turbineId);
        return response()->json($data, $data->count() ? 200 : 400);
    }

}
