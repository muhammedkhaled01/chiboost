<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\addNewAccountController;
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
Route::get('/boosting/{id}', [HomeController::class, 'show'])->name('boosting');
Route::post('saveDivisions', [HomeController::class, 'saveDivisions'])->name('saveDivisions');


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('add-new-account', [addNewAccountController::class, 'index'])->name('addNewAccount');
        Route::post('saveAccount', [addNewAccountController::class, 'saveAccounts'])->name('saveAccount');
    });
    Route::resource('admin', DashboardController::class);
    Route::get('/admin/{id}', [DashboardController::class, 'show']);

//    Route::post('/admin/{id}', [DashboardController::class, 'search']);
//    Route::get('new-account',[MarketplaceController::class, 'createAccounts'])->name('create-account');
//    Route::post('storeAccounts',[MarketplaceController::class, 'storeAccounts'])->name('storeAccounts');

});
//Route::get('admin', [DashboardController::class, 'requests'])->name('admin');
//Route::get('login', [AuthController::class, 'login']);s
//Route::get('register', [AuthController::class, 'register']);

Route::get('marketplace', [MarketplaceController::class, 'index'])->name('marketplace');

