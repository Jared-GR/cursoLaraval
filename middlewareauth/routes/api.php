<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);


// 1|BuAPgnaX4dmu3FtOQ1si1GV4rGMVxjIMhYPRYvq76e71a52a
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
