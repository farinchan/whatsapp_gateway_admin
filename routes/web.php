<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('back.home.index');
});

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
        Route::post('/create-session', [App\Http\Controllers\Back\HomeController::class, 'createSession'])->name('createSession');
    });

    Route::resource('user', App\Http\Controllers\Back\UserController::class);

    Route::prefix('documentation')->name('documentation.')->group(function () {
        Route::get('/', function () {
            return redirect()->route('back.documentation.sendMessage');
        })->name('index');
        Route::get('/send-message', [App\Http\Controllers\Back\DocumentationController::class, 'sendMessage'])->name('sendMessage');
        Route::get('/send-image', [App\Http\Controllers\Back\DocumentationController::class, 'sendImage'])->name('sendImage');
        Route::get('/send-bulk-message', [App\Http\Controllers\Back\DocumentationController::class, 'sendBulkMessage'])->name('sendBulkMessage');
    });

    Route::prefix('message')->name('message.')->group(function () {
        Route::get('/', function () {
            return redirect()->route('back.message.sendMessage');
        })->name('index');
        Route::get('/send-message', [App\Http\Controllers\Back\MessageController::class, 'sendMessage'])->name('sendMessage');
        Route::get('/send-image', [App\Http\Controllers\Back\MessageController::class, 'sendImage'])->name('sendImage');
        Route::post('/send-image-process', [App\Http\Controllers\Back\MessageController::class, 'sendImageProcess'])->name('sendImageProcess');
        Route::get('/send-bulk-message', [App\Http\Controllers\Back\MessageController::class, 'sendBulkMessage'])->name('sendBulkMessage');
        Route::post('/send-bulk-message-process', [App\Http\Controllers\Back\MessageController::class, 'sendBulkMessageProcess'])->name('sendBulkMessageProcess');
    });
});
