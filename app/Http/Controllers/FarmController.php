<?php

namespace App\Http\Controllers;

use App\Actions\GetFarms;
use App\Actions\GetFarmTurbines;
use App\Http\Resources\ApiResource;

class FarmController extends Controller
{
    public function index(GetFarms $action, ?int $farmId = null): ApiResource
    {
        return new ApiResource($action($farmId));
    }

    public function turbines(GetFarmTurbines $action, int $farmId, ?int $turbineId = null): ApiResource
    {
        return new ApiResource($action($farmId, $turbineId));
    }

}
