<?php

use App\Http\Controllers\CashInController;
use App\Http\Controllers\CashOutController;
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
Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("cash-in",[CashInController::class, "index"])->name("cash-in-page");
Route::post('cash-in',[CashInController::class, "post"])->name("submit-cash-in");

Route::get('cash-out', [CashOutController::class, "index"])->name("cash-out-page");
Route::post('cash-out',[CashOutController::class, "post"])->name("submit-cash-out");
