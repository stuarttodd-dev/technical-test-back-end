<?php

namespace App\Http\Controllers;

use App\Actions\GetFarms;
use App\Actions\GetFarmTurbines;
use App\Http\Resources\ApiResource;
use Illuminate\Http\JsonResponse;
use App\Traits\HttpResponses;

class FarmController extends Controller
{
    use HttpResponses;

    public function index(GetFarms $action, ?int $farmId = null): JsonResponse
    {
        $data = new ApiResource($action($farmId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

    public function turbines(GetFarmTurbines $action, int $farmId, ?int $turbineId = null): JsonResponse
    {
        $data = new ApiResource($action($farmId, $turbineId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

}
