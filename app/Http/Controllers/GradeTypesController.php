<?php

namespace app\Http\Controllers;

use App\Actions\GetGradeTypes;
use Illuminate\Support\Collection;

class GradeTypesController extends Controller
{
    public function index(GetGradeTypes $action, ?int $gradeTypeId = null): Collection
    {
        return $action($gradeTypeId);
    }

}
