<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\HomeController;

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

Route::get('/registeruser', [RegisterUserController::class, 'index']);
Route::post('/registeruser', [RegisterUserController::class, 'store']);
Route::get('/loginuser', [LoginUserController::class, 'index'])->middleware('guest');;
Route::post('/loginuser', [LoginUserController::class, 'authenticate'])->middleware('guest');;
Route::post('/logout', [LoginUserController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index']);
//Route::post('/home', [HomeController::class, 'index']);

