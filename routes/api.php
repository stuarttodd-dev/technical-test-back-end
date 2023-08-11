<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComponentsController;
use app\Http\Controllers\ComponentsTypesController;
use App\Http\Controllers\FarmController;
use app\Http\Controllers\GradesController;
use app\Http\Controllers\GradeTypesController;
use app\Http\Controllers\InspectionsController;
use App\Http\Controllers\TurbineController;

Route::controller(ComponentsController::class)->group(function () {
    Route::get('/components', 'index');
    Route::get('/components/{componentId}', 'index');
    Route::get('/components/{i}/grades', 'grades');
    Route::get('/components/{i}/grades/{gradeId}', 'grades');
});

Route::controller(ComponentsTypesController::class)->group(function () {
    Route::get('/component-types', 'index');
    Route::get('/component-types/{componentTypeId}', 'index');
});

Route::controller(FarmController::class)->group(function () {
    Route::get('/farms', 'index');
    Route::get('/farms/{farmId}', 'index');
    Route::get('/farms/{farmId}/turbines', 'turbines');
    Route::get('/farms/{farmId}/turbines/{turbineId}', 'turbines');
});

Route::controller(GradesController::class)->group(function () {
    Route::get('/grades', 'index');
    Route::get('/grades/{gradeId}', 'index');
});

Route::controller(GradeTypesController::class)->group(function () {
    Route::get('/grade-types', 'index');
    Route::get('/grade-types/{gradeTypeId}', 'index');
});

Route::controller(InspectionsController::class)->group(function () {
    Route::get('/inspections/{inspectionId}/grades', 'index');
    Route::get('/inspections/{inspectionId}/grades/{gradeId}', 'index');
});

Route::controller(TurbineController::class)->group(function () {
    Route::get('/turbines', 'index');
    Route::get('/turbines/{turbineId}', 'index');
    Route::get('/turbines/{turbineId}/components', 'components');
    Route::get('/turbines/{turbineId}/components/{componentId}', 'components');
    Route::get('/turbines/{turbineId}/inspections', 'inspections');
    Route::get('/turbines/{turbineId}/inspections/{inspectionId}', 'inspections');
});

