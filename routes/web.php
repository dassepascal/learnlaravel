<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {



    return view('home');
});


Route::get('/contact', function () {
    return
        view('contact');
});




Route::resource('jobs', JobController::class);

//Auth

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login', [SessionController::class,'create']);


Route::post('/login',[SessionController::class,'store']);
