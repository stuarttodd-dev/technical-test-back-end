<?php

namespace App\Actions;

use App\Models\Grade;
use Illuminate\Support\Collection;

class GetComponentGrades
{
    public function __invoke(int $componentId, ?int $gradeId = null): Collection
    {
        if (!empty($gradeId)) {
            $data = Grade::where('id', $gradeId)
                ->where('component_id', $componentId)
                ->first();
        } else {
            $data = Grade::where('component_id', $componentId)
                ->get();
        }

        return collect($data);
    }

}
