<?php

namespace App\Http\Controllers;

use App\Actions\GetGrades;
use Illuminate\Http\JsonResponse;

class GradesController extends Controller
{
    public function index(GetGrades $action, ?int $gradeId = null): JsonResponse
    {
        $data = $action($gradeId);

        return response()->json($data, 400);
    }

}
