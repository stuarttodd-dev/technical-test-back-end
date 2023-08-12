<?php

namespace App\Actions;

use App\Models\Component;
use Illuminate\Support\Collection;

class GetTurbineComponents
{
    public function __invoke(int $turbineId, ?int $componentId = null): Collection
    {
        if (!empty($componentId)) {
            $data = Component::where('turbine_id', $turbineId)
                ->where('id', $componentId)
                ->first();
        } else {
            $data = Component::where('turbine_id', $turbineId)
                ->get();
        }

        return collect($data);
    }

}
