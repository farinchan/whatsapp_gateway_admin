<?php

use Illuminate\Support\Facades\Route;

Route::name('auth.')->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.proses');
    Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.proses');

    Route::get('password/reset', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    
    Route::get('password/reset/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

    // Route::get('email/verify', [\App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
    // Route::get('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
    // Route::post('email/resend', [\App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');
});

Route::middleware(['auth'])->name('back.')->group(function () {
    Route::prefix('home')->name('home.')->group(function () {
        Route::get('/', [App\Http\Controllers\Back\HomeController::class, 'index'])->name('index');
    });
});
