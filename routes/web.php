<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('academics', [App\Http\Controllers\HomeController::class, 'academics'])->name('academics');
Route::get('events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');
Route::get('campus-life', [App\Http\Controllers\HomeController::class, 'campusLife'])->name('campus-life');
