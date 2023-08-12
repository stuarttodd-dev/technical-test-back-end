<?php

namespace App\Actions;

use App\Models\Inspection;
use Illuminate\Support\Collection;

class GetTurbineInspections
{
    public function __invoke(int $turbineId, ?int $inspectionId = null): Collection
    {
        if (!empty($inspectionId)) {
            $data = Inspection::where('turbine_id', $turbineId)
                ->where('id', $inspectionId)
                ->first();
        } else {
            $data = Inspection::where('turbine_id', $turbineId)
                ->get();
        }

        return collect($data);
    }

}
