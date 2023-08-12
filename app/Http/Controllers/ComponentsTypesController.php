<?php

namespace App\Http\Controllers;

use App\Actions\GetComponentTypes;
use App\Http\Resources\ApiResource;
use App\Traits\HttpResponses;
use Illuminate\Http\JsonResponse;

class ComponentsTypesController extends Controller
{
    use HttpResponses;

    public function index(GetComponentTypes $action, ?int $componentTypeId = null): JsonResponse
    {
        $data = new ApiResource($action($componentTypeId));

        return $this->success(
            $data,
            'Successfully queried API'
        );
    }

}
