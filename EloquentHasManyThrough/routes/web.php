<?php

use Illuminate\Support\Facades\Route;
use App\Models\CountryController;
use App\Models\UserController;
use App\Models\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('country', CountryController::class);

Route::resource('user', UserController::class);

Route::resource('post', PostController::class);

