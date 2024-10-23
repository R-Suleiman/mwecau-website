<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AcademicsController::class)->group(function(){
    Route::get('/academics', 'academicsJson');
});

Route::controller(StaffController::class)->group(function(){
    Route::post('/staff-Photo', 'staffPhoto');
});

Route::controller(ApiController::class)->group(function(){
    Route::get('/university-structure', 'UniversityStructure');
});
