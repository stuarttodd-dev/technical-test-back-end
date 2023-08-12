<?php

namespace App\Actions;

use App\Models\Grade;
use App\Models\Inspection;
use Illuminate\Support\Collection;

class GetInspectionGrades
{
    public function __invoke(int $inspectionId, ?int $gradeId = null): Collection
    {
        if (!empty($gradeId)) {
            $data = Grade::where('id', $gradeId)
                ->where('inspection_id', $inspectionId)
                ->first();
        } else {
            $data = Grade::where('inspection_id', $inspectionId)
                ->get();
        }

        return collect($data);
    }

}
