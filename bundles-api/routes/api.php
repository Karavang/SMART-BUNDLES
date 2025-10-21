<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Update;
use App\Http\Controllers\User\Find;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/profile/{id}', Find::class);
Route::put('/profile/{id}', Update::class);
