<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
Route::post("/login", function(){
    
});
Route::get('/', function () {
    return User::All();
});
