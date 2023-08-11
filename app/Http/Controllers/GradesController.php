<?php

namespace app\Http\Controllers;

use app\Actions\GetGrades;
use Illuminate\Http\JsonResponse;

class GradesController extends Controller
{
    public function index(GetGrades $action, ?int $gradeId = null): JsonResponse
    {
        $data = $action($gradeId);

        return response()->json($data, 200);
    }

}
