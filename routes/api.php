<?php

use App\Http\Controllers\FootballerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/footballers', [FootballerController::class, 'index'])->name('show.footballers');
Route::get('/footballers/{footballer}', [FootballerController::class, 'show'])->name('show.footballer');
