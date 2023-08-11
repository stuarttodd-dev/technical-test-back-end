<?php

namespace app\Http\Controllers;

use App\Actions\GetGradeTypes;
use Illuminate\Http\JsonResponse;

class GradeTypesController extends Controller
{
    public function index(GetGradeTypes $action, ?int $gradeTypeId = null): JsonResponse
    {
        $data = $action($gradeTypeId);

        return response()->json($data, 400);
    }

}
