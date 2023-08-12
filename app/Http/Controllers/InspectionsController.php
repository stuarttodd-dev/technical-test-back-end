<?php

namespace App\Http\Controllers;

use App\Actions\GetInspectionGrades;
use App\Actions\GetInspections;
use App\Http\Resources\ApiResource;
use Illuminate\Http\JsonResponse;
use App\Traits\HttpResponses;

class InspectionsController extends Controller
{
    use HttpResponses;

    public function index(GetInspections $action, ?int $inspectionId = null): JsonResponse
    {
        $data = new ApiResource($action($inspectionId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

    public function grades(GetInspectionGrades $action, int $inspectionId, ?int $gradeId = null): JsonResponse
    {
        $data = new ApiResource($action($inspectionId, $gradeId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

}
