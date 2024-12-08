<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('landing.home');
})->name('home');

//guest
Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('plogin');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('pregister');
});

//auth
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('hitung', PerhitunganController::class);
    Route::group(['middleware' => ['can:admin']], function () {
        Route::resource('user', UserController::class);
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});