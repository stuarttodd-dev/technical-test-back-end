<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ComponentsTypesController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\GradeTypesController;
use App\Http\Controllers\InspectionsController;
use App\Http\Controllers\TurbineController;

Route::controller(ComponentsController::class)->group(function () {
    Route::get('/components', 'index');
    Route::get('/components/{componentId}', 'index');
    Route::get('/components/{componentId}/grades', 'grades');
    Route::get('/components/{componentId}/grades/{gradeId}', 'grades');
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
    Route::get('/inspections', 'index');
    Route::get('/inspections/{inspectionId}', 'index');
    Route::get('/inspections/{inspectionId}/grades', 'grades');
    Route::get('/inspections/{inspectionId}/grades/{gradeId}', 'grades');
});

Route::controller(TurbineController::class)->group(function () {
    Route::get('/turbines', 'index');
    Route::get('/turbines/{turbineId}', 'index');
    Route::get('/turbines/{turbineId}/components', 'components');
    Route::get('/turbines/{turbineId}/components/{componentId}', 'components');
    Route::get('/turbines/{turbineId}/inspections', 'inspections');
    Route::get('/turbines/{turbineId}/inspections/{inspectionId}', 'inspections');
});

