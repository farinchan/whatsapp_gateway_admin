<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('whatsapp-api')->name('api.whatsapp.')->group(function () {
    Route::get('/get-all-sessions', [App\Http\Controllers\Api\WhatsappController::class, 'getAllSessions'])->name('get-all-sessions');
    Route::get('/get-my-session', [App\Http\Controllers\Api\WhatsappController::class, 'getMySession'])->name('get-my-session');
    Route::post('/delete-session', [App\Http\Controllers\Api\WhatsappController::class, 'deleteSession'])->name('delete-session');
    Route::post('/send-message', [App\Http\Controllers\Api\WhatsappController::class, 'sendMessage'])->name('send-message');
    Route::post('/send-bulk-message', [App\Http\Controllers\Api\WhatsappController::class, 'sendBulkMessage'])->name('send-bulk-message');
    Route::post('/send-image', [App\Http\Controllers\Api\WhatsappController::class, 'sendImage'])->name('send-image');
});

