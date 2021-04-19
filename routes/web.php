<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\Vista1Controller;
use App\Http\Controllers\Vista2Controller;
use App\Http\Controllers\Vista3Controller;
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

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dash', [DashController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/create', [Vista1Controller::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/update', [Vista2Controller::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/delete', [Vista3Controller::class, 'index']);


