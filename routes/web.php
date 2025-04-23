<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/inventaris', [ItemController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::redirect('/', '/login');