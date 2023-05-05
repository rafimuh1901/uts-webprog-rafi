<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

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
Route::post('/switch', [HomeController::class, 'switchAccount'])->name('switchAccount');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Route::get('/', function () {
//     return view('index');
// });
