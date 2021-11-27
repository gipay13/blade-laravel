<?php

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

Route::resource('/', HomeController::class);
Route::get('clubs', [HomeController::class, 'clubs'])->name('home.clubs');
Route::get('managers', [HomeController::class, 'managers'])->name('home.managers');
Route::get('players', [HomeController::class, 'players'])->name('home.players');
Route::get('stadiums', [HomeController::class, 'stadiums'])->name('home.stadiums');
