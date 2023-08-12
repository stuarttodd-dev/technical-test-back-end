<?php

namespace App\Http\Controllers;

use App\Actions\GetComponentGrades;
use App\Actions\GetComponents;
use App\Http\Resources\ApiResource;
use App\Traits\HttpResponses;
use Illuminate\Http\JsonResponse;

class ComponentsController extends Controller
{
    use HttpResponses;

    public function index(GetComponents $action, ?int $componentId = null): JsonResponse
    {
        $data = new ApiResource($action($componentId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

    public function grades(GetComponentGrades $action, int $componentId, ?int $gradeId = null): JsonResponse
    {
        $data = new ApiResource($action($componentId, $gradeId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

}
