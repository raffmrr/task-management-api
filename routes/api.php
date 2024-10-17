<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::apiResource('tasks', TaskController::class);

Route::middleware('jwt')->get('/user', function (Request $request) {
    return $request->user();
});
