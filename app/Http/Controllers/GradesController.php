<?php

namespace App\Http\Controllers;

use App\Actions\GetGrades;
use App\Http\Resources\ApiResource;

class GradesController extends Controller
{
    public function index(GetGrades $action, ?int $gradeId = null): ApiResource
    {
        return new ApiResource($action($gradeId));
    }

}
