<?php

namespace app\Actions;

use Illuminate\Support\Collection;

class GetGrades
{
    public function __invoke(?int $gradeTypeId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//            "id": 0,
//  "inspection_id": 0,
//  "component_id": 0,
//  "grade_type_id": 0,
//  "created_at": "2023-08-11T16:42:59.042Z",
//  "updated_at": "2023-08-11T16:42:59.042Z"
//}

    }

}
