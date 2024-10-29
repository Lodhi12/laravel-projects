<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;

// Route for the login page
Route::get('/login', function() {
    return view('login');
})->name('login');



// Route for matching login credentials
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

// Route for the home page
Route::get('home', [UserController::class, 'homePage'])->name('home');

// Resource route for users (this includes index, create, store, show, edit, update, destroy)
Route::resource('/user', UserController::class);

// Optional: Redirect the default user index route to the user index method
Route::get('/', function () {
    return redirect()->route('user.index');
});

Route::get('/attendance/filter', [AttendanceController::class, 'filter'])->name('attendance.filter');
