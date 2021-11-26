<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('divisions', [HomeController::class, 'divisions'])->name('divisions');
Route::get('netwins', [HomeController::class, 'netwins'])->name('netwins');
Route::get('placements', [HomeController::class, 'placements'])->name('placements');
Route::post('saveDivisions', [HomeController::class, 'saveDivisions'])->name('saveDivisions');
Route::resource('admin',DashboardController::class)->middleware(['auth','admin']);

//Route::get('admin', [DashboardController::class, 'requests'])->name('admin');
//Route::get('login', [AuthController::class, 'login']);s
//Route::get('register', [AuthController::class, 'register']);

