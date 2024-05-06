<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [RegisterController::class, 'create'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.action');

Route::get('/welcome', [RegisterController::class, 'welcome'])->name('welcome');

Route::get('/verify-email', [EmailVerificationController::class, 'index'])->name('verify.email');

Route::post('/verify-email', [EmailVerificationController::class, 'verifyEmail'])->name('verify.email.action');
