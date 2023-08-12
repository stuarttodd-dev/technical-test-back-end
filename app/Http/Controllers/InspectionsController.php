<?php

namespace App\Http\Controllers;

use App\Actions\GetInspectionGrades;
use App\Actions\GetInspections;
use App\Http\Resources\ApiResource;

class InspectionsController extends Controller
{
    public function index(GetInspections $action, ?int $inspectionId = null): ApiResource
    {
        return new ApiResource($action($inspectionId));
    }

    public function grades(GetInspectionGrades $action, int $inspectionId, ?int $gradeId = null): ApiResource
    {
        return new ApiResource($action($inspectionId, $gradeId));
    }

}
