<?php

namespace App\Http\Controllers;

use App\Actions\GetInspectionGrades;
use Illuminate\Http\JsonResponse;

class InspectionsController extends Controller
{
    public function index(GetInspectionGrades $action, int $inspectionId, ?int $gradeId = null): JsonResponse
    {
        $data = $action($inspectionId, $gradeId);

        return response()->json($data, 400);
    }

}
