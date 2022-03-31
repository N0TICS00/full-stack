<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AuthController;

//Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", function(){
    return view("/login");
});
Route::get("/roadmap/{number}", function($number){
    switch ($number) {
        case '1':
            return view("html-css");
            break;
        case '2':
            return view("js-basics");
        default:
            return back();
            break;
    };
});
Route::post('/register', [AuthController::class, 'register']);
Route::post("/login", [AuthController::class, 'login']);
Route::post("/news", [EmailController::class, "sendEmail"]);

//Protected Routes
Route::group(['middleware' => 'web'], function(){
    Route::get('/overview', function(){
        return view("membership/overview");
    });
    Route::get("/logout", [AuthController::class, 'logout']);
    Route::get("/faq", function(){
        return view('membership/faq');
    });
    Route::get("/courses/{number}", function($number){
        switch ($number) {
            case '1':
                return view("membership/courses/html-css");
                break;
            case '2':
                return view("membership/courses/js-basics");
            default:
                return back();
                break;
        };
    });
});




