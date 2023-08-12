<?php

namespace App\Actions;

use App\Models\Component;
use Illuminate\Support\Collection;

class GetComponents
{
    public function __invoke(?int $componentId = null): Collection
    {
        if (!empty($componentId)) {
            $data = Component::find($componentId);
        } else {
            $data = Component::all();
        }

        return collect($data);
    }

}
