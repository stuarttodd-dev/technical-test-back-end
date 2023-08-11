<?php

namespace app\Actions;

use Illuminate\Support\Collection;

class GetGradeTypes
{
    public function __invoke(?int $gradeTypeId = null): Collection
    {
        return collect(['some', 'data']);

        //        {
        //            "id": 0,
        //  "name": "string",
        //  "created_at": "2023-08-11T16:17:32.021Z",
        //  "updated_at": "2023-08-11T16:17:32.021Z"
        //}
    }

}
