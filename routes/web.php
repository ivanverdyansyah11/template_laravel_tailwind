<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use \App\Http\Controllers\StudentController;
use \App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::fallback(function () {
    return redirect()->back();
});

Route::redirect('/', '/dashboard');

Route::middleware(['guest'])->group(function () {
    Route::get('/dashboard/auth/login', [UserController::class, 'login'])->name('auth.login');
    Route::get('/dashboard/auth/register', [UserController::class, 'register'])->name('auth.register');
});

Route::middleware(['guest'])->group(function () {
    Route::resource('/profile', ProfileController::class);
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/student', StudentController::class);
});
