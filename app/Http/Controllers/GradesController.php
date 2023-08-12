<?php

namespace App\Http\Controllers;

use App\Actions\GetGrades;
use App\Http\Resources\ApiResource;
use Illuminate\Http\JsonResponse;
use App\Traits\HttpResponses;

class GradesController extends Controller
{
    use HttpResponses;

    public function index(GetGrades $action, ?int $gradeId = null): JsonResponse
    {
        $data = new ApiResource($action($gradeId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

}
