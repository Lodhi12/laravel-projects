<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('register', 'register')->name('register');

Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');

Route::view('login', 'login')->name('login');

Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('dashboard/inner', [UserController::class, 'innerPage'])->name('inner');