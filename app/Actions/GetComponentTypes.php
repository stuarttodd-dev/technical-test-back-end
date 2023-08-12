<?php

namespace App\Actions;

use App\Models\ComponentType;
use Illuminate\Support\Collection;

class GetComponentTypes
{
    public function __invoke(?int $componentTypeId = null): Collection
    {
        if (!empty($componentTypeId)) {
            $data = ComponentType::find($componentTypeId);
        } else {
            $data = ComponentType::all();
        }

        return collect($data);
    }

}
