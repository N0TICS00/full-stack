<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/roadmap/1", function(){
    return view("html-css");
});
Route::get("/roadmap/2", function(){
    return view("js-basics");
});
Route::get("/overview", function(){
    return view('membership/overview');
});
Route::get("/faq", function(){
    return view('membership/faq');
});


/*
Route::get("/courses/{id}", [CoursesController::class, 'redirect']);
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/courses', function(){
        return view("membership/courses/html-css");
    });
    Route::post("/logout", [AuthController::class, 'logout']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
