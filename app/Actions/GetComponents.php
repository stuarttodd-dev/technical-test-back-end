<?php

namespace app\Actions;

use Illuminate\Support\Collection;

class GetComponents
{
    public function __invoke(?int $componentId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//            "data": [
//    {
//        "id": 0,
//      "component_type_id": 0,
//      "turbine_id": 0,
//      "created_at": "2023-08-11T16:52:53.221Z",
//      "updated_at": "2023-08-11T16:52:53.221Z"
//    }
//  ]

    }

}
