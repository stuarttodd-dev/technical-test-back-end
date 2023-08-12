<?php

namespace App\Actions;

use App\Models\Turbine;
use Illuminate\Support\Collection;

class GetFarmTurbines
{
    public function __invoke(int $farmId, ?int $turbineId = null): Collection
    {
        if (!empty($turbineId)) {
            $data = Turbine::where('farm_id', $farmId)
                ->where('id', $turbineId)
                ->first();
        } else {
            $data = Turbine::where('farm_id', $farmId)
                ->get();
        }

        return collect($data);
    }

}
