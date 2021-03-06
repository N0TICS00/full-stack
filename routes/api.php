<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;

Route::get("index", [AuthController::class, "index"]);
Route::get("create", [AuthController::class, "create"]);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});