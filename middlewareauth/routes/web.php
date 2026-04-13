<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [ExampleController::class,'index']);
Route::get('/no-access', [ExampleController::class,'noAccess'])->name('no-access');

// // GROUPS
// Route::middleware(['example'])->group(function () {
//     Route::get('/', [ExampleController::class,'index']);
// });