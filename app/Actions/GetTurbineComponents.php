<?php

namespace App\Actions;

use Illuminate\Support\Collection;

class GetTurbineComponents
{
    public function __invoke(int $turbineId, ?int $componentId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//            "id": 0,
//  "component_type_id": 0,
//  "turbine_id": 0,
//  "created_at": "2023-08-11T16:55:18.704Z",
//  "updated_at": "2023-08-11T16:55:18.704Z"
//}

    }

}
