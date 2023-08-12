<?php

namespace App\Actions;

use App\Models\Farm;
use Illuminate\Support\Collection;

class GetFarms
{
    public function __invoke(?int $farmId = null): Collection
    {
        if (!empty($farmId)) {
            $data = Farm::find($farmId);
        } else {
            $data = Farm::all();
        }

        return collect($data);
    }

}
