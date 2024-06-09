<?php

use App\Http\Controllers\EventDayController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowTimeController;
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

Route::resource('admin/movies', MovieController::class);
Route::resource('admin/showtimes', ShowTimeController::class);
Route::resource('admin/eventdays', EventDayController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
