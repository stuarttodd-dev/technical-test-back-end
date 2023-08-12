<?php

namespace App\Http\Controllers;

use App\Actions\GetGradeTypes;
use App\Http\Resources\ApiResource;

class GradeTypesController extends Controller
{
    public function index(GetGradeTypes $action, ?int $gradeTypeId = null): ApiResource
    {
        return new ApiResource($action($gradeTypeId));
    }

}
