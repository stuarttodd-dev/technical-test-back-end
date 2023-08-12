<?php

namespace App\Actions;

use App\Models\Inspection;
use Illuminate\Support\Collection;

class GetInspections
{
    public function __invoke(?int $inspectionId = null): Collection
    {
        if (!empty($inspectionId)) {
            $data = Inspection::find($inspectionId);
        } else {
            $data = Inspection::all();
        }

        return collect($data);
    }

}
