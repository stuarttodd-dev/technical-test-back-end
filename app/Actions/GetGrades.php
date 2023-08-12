<?php

namespace App\Actions;

use App\Models\Grade;
use Illuminate\Support\Collection;

class GetGrades
{
    public function __invoke(?int $gradeId = null): Collection
    {
        if (!empty($gradeId)) {
            $data = Grade::find($gradeId);
        } else {
            $data = Grade::all();
        }

        return collect($data);
    }

}
