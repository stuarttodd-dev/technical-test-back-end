<?php

namespace App\Actions;

use App\Models\Turbine;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class GetTurbines
{
    public function __invoke(?int $turbineId = null): Collection
    {
        return Turbine::when(!empty($turbineId), function(Builder $query) use ($turbineId) {
            return $query->where('id', $turbineId);
        })->get();
    }

}
