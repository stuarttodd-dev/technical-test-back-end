<?php

namespace App\Http\Controllers;

use App\Actions\GetInspectionGrades;
use Illuminate\Support\Collection;

class InspectionsController extends Controller
{
    public function index(GetInspectionGrades $action, int $inspectionId, ?int $gradeId = null): Collection
    {
        return $action($inspectionId, $gradeId);
    }

}
