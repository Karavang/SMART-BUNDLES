<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/profile/{id}', [UserController::class, 'show']);
Route::put('/profile/{id}', [UserController::class, 'update']);
