<?php

namespace app\Actions;

use Illuminate\Support\Collection;

class GetTurbineInspections
{
    public function __invoke(int $turbineId, ?int $inspectionId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//            "data": [
//        {
//            "id": 0,
//          "turbine_id": 0,
//          "inspected_at": "2023-08-11T16:50:55.006Z",
//          "created_at": "2023-08-11T16:50:55.006Z",
//          "updated_at": "2023-08-11T16:50:55.006Z"
//        }
//      ]
//}

    }

}
