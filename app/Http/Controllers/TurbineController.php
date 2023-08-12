<?php

namespace App\Http\Controllers;

use App\Actions\GetTurbineComponents;
use App\Actions\GetTurbineInspections;
use App\Actions\GetTurbines;
use App\Http\Resources\ApiResource;
use Illuminate\Http\JsonResponse;
use App\Traits\HttpResponses;

class TurbineController extends Controller
{
    use HttpResponses;

    public function index(GetTurbines $action, ?int $turbineId = null): JsonResponse
    {
        $data = new ApiResource($action($turbineId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

    public function components(GetTurbineComponents $action, int $turbineId, ?int $componentId = null): JsonResponse
    {
        $data = new ApiResource($action($turbineId, $componentId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

    public function inspections(GetTurbineInspections $action, int $turbineId, ?int $inspectionId = null): JsonResponse
    {
        $data = new ApiResource($action($turbineId, $inspectionId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

}
