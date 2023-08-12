<?php

namespace App\Http\Controllers;

use App\Actions\GetComponentGrades;
use App\Actions\GetComponents;
use Illuminate\Support\Collection;

class ComponentsController extends Controller
{
    public function index(GetComponents $action, ?int $componentId = null): Collection
    {
        return $action($componentId);
    }

    public function grades(GetComponentGrades $action, int $componentId, ?int $gradeId = null): Collection
    {
        return $action($componentId, $gradeId);
    }

}
