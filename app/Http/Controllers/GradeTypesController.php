<?php

namespace App\Http\Controllers;

use App\Actions\GetGradeTypes;
use App\Http\Resources\ApiResource;
use Illuminate\Http\JsonResponse;
use App\Traits\HttpResponses;

class GradeTypesController extends Controller
{
    use HttpResponses;
    public function index(GetGradeTypes $action, ?int $gradeTypeId = null): JsonResponse
    {
        $data = new ApiResource($action($gradeTypeId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

}
