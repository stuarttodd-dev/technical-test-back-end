<?php

namespace App\Http\Controllers;

use App\Actions\GetGrades;
use Illuminate\Support\Collection;

class GradesController extends Controller
{
    public function index(GetGrades $action, ?int $gradeId = null): Collection
    {
        return $action($gradeId);
    }

}
