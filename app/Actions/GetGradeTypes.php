<?php

namespace App\Actions;

use App\Models\GradeType;
use Illuminate\Support\Collection;

class GetGradeTypes
{
    public function __invoke(?int $gradeTypeId = null): Collection
    {
        if (!empty($gradeTypeId)) {
            $data = GradeType::find($gradeTypeId);
        } else {
            $data = GradeType::all();
        }

        return collect($data);
    }

}
