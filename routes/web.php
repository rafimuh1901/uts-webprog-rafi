<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{id}', [HomeController::class, 'show'])->name('home.show');
Route::get('/switchAccount/{id}', [HomeController::class, 'switchAccount'])->name('switchAccount');
Route::get('/menu/{id}', [MenuController::class, 'index'])->name('menu.index');
Route::post('/menu/buy', [MenuController::class, 'buy'])->name('menu.buy');
Route::get('/transactions/{id}', [TransactionController::class, 'index'])->name('transaction.index');
// Route::get('/', function () {
//     return view('index');
// });
