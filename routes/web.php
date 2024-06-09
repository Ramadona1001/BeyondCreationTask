<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\EventDayController;
use App\Http\Controllers\EventDayShowtimeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [FrontController::class,'index'])->name('welcome');

Route::resource('admin/movies', MovieController::class);
Route::resource('admin/showtimes', ShowTimeController::class);
Route::resource('admin/eventdays', EventDayController::class);
Route::resource('admin/attendees', AttendeeController::class);
Route::resource('admin/event-times', EventDayShowtimeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/geteventdays-reservations/{movie}', [ReservationController::class,'getEventDays'])->name('getEventDays');
Route::get('/getShowtimes/{movie}/{event_day}', [ReservationController::class,'getShowtimes'])->name('getShowtimes');
Route::post('/attendees-store', [ReservationController::class,'store'])->name('store_attendees');
