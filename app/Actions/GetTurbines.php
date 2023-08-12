<?php

namespace App\Actions;

use Illuminate\Support\Collection;
use App\Models\Turbine;

class GetTurbines
{
    public function __invoke(?int $turbineId = null): Collection
    {
        if (!empty($turbineId)) {
            $data = Turbine::find($turbineId);
        } else {
            $data = Turbine::all();
        }

        return collect($data);
    }

}
