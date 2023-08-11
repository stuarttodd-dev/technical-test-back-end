<?php

namespace app\Actions;

use Illuminate\Support\Collection;

class GetInspections
{
    public function __invoke(?int $inspectionId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//            "id": 0,
//          "turbine_id": 0,
//          "inspected_at": "2023-08-11T16:49:30.757Z",
//          "created_at": "2023-08-11T16:49:30.757Z",
//          "updated_at": "2023-08-11T16:49:30.757Z"
//        }

    }

}
