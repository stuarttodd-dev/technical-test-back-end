<?php

namespace App\Http\Controllers;

use App\Actions\GetComponentGrades;
use App\Actions\GetComponents;
use Illuminate\Http\JsonResponse;

class ComponentsController extends Controller
{
    public function index(GetComponents $action, ?int $componentId = null): JsonResponse
    {
        $data = $action($componentId);
        return response()->json($data, $data->count() ? 200 : 400);
    }

    public function grades(GetComponentGrades $action, int $componentId, ?int $gradeId = null): JsonResponse
    {
        $data = $action($componentId, $gradeId);
        return response()->json($data, $data->count() ? 200 : 400);
    }

}
