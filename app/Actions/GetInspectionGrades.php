<?php

namespace App\Actions;

use Illuminate\Support\Collection;

class GetInspectionGrades
{
    public function __invoke(int $inspectionId, ?int $gradeId = null): Collection
    {
        return collect(['some', 'data']);

//        {
//                "id": 0,
//      "inspection_id": 0,
//      "component_id": 0,
//      "grade_type_id": 0,
//      "created_at": "2023-08-11T16:44:26.504Z",
//      "updated_at": "2023-08-11T16:44:26.504Z"
//    }

    }

}
