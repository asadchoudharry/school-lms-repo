<?php
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('v1')->group(function(){
    Route::get('/student/results', [App\Http\Controllers\Api\StudentResultController::class,'index']);
    Route::get('/student/results/{id}', [App\Http\Controllers\Api\StudentResultController::class,'show']);

    // Chat
    Route::get('/chat/threads', [App\Http\Controllers\Api\ChatController::class,'threads']);
    Route::get('/chat/thread/{id}/messages', [App\Http\Controllers\Api\ChatController::class,'messages']);
    Route::post('/chat/thread/{id}/message', [App\Http\Controllers\Api\ChatController::class,'postMessage']);
});
