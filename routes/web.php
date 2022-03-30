<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;

//Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get("/roadmap/1", function(){
    return view("html-css");
});
Route::get("/roadmap/2", function(){
    return view("js-basics");
});
Route::get("/faq", function(){
    return view('membership/faq');
});
Route::get("/login", function(){
    return view("/login");
});
Route::post('/register', [AuthController::class, 'register']);
Route::post("/login", [AuthController::class, 'login']);
// Route::post("/news", [LoginController::class, "newsletterSignup"]);

//Protected Routes
Route::group(['middleware' => 'web'], function(){
    Route::get('/overview', function(){
        return view("membership/overview");
    });
    Route::get("/logout", [AuthController::class, 'logout']);
});




