<?php

namespace App\Actions;

use Illuminate\Support\Collection;

class GetFarmTurbines
{
    public function __invoke(int $farmId = 0, ?int $turbineId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//                    "id": 0,
//          "name": "string",
//          "farm_id": 0,
//          "lat": 0,
//          "lng": 0,
//          "created_at": "2023-08-11T16:19:28.386Z",
//          "updated_at": "2023-08-11T16:19:28.386Z"
//        }
    }

}
