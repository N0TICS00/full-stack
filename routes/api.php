<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;

//Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post("/login", [AuthController::class, 'login']);
// Route::post("/news", [LoginController::class, "newsletterSignup"]);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/overview', function(){
        return view("membership/overview");
    });
    Route::post("/logout", [AuthController::class, 'logout']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
