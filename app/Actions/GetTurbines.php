<?php

namespace App\Actions;

use Illuminate\Support\Collection;

class GetTurbines
{
    public function __invoke(?int $turbineId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//            "data": [
//    {
//        "id": 0,
//      "name": "string",
//      "farm_id": 0,
//      "lat": 0,
//      "lng": 0,
//      "created_at": "2023-08-11T16:56:12.710Z",
//      "updated_at": "2023-08-11T16:56:12.710Z"
//    }
//  ]
//}
    }

}
