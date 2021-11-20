<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index']);
Route::get('divisions', [HomeController::class, 'divisions']);
Route::get('netwins', [HomeController::class, 'netwins']);
Route::get('placements', [HomeController::class, 'placements']);

Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
