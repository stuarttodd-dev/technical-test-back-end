<?php

namespace App\Http\Controllers;

use App\Actions\GetFarms;
use App\Actions\GetFarmTurbines;
use Illuminate\Support\Collection;

class ComponentsTypesController extends Controller
{
    public function index(GetFarms $action, ?int $farmId = null): Collection
    {
        return $action($farmId);

    }

    public function turbines(GetFarmTurbines $action, int $farmId, ?int $turbineId = null): Collection
    {
        return $action($farmId, $turbineId);
    }

}
