<?php

namespace App\Http\Controllers;

use App\Actions\GetComponentTypes;
use App\Http\Resources\ApiResource;

class ComponentsTypesController extends Controller
{
    public function index(GetComponentTypes $action, ?int $componentTypeId = null): ApiResource
    {
        return new ApiResource($action($componentTypeId));

    }

}
