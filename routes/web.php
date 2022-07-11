<?php

use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/users", [UsersController::class, 'index'])
->name('index');

Route::post("/users", [UsersController::class, 'store'])
->name('store');

Route::resource('/reservations', ReservationsController::class);
