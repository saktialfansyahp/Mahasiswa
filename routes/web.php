<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\UserController;

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
Route::resource('mahasiswa', StudentController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/generatepdf', [App\Http\Controllers\UserController::class, 'generatepdf'])->name('generatepdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/generatepdf', [App\Http\Controllers\HomeController::class, 'generatepdf'])->name('generatepdf');
Route::post('login', [AuthController::class, 'processLogin']);
Route::post('register', [AuthController::class, 'processRegister']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('chart-js', [ChartJSController::class, 'index']);
