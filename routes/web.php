<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;




Route::get('/', function () {



    return view('home');
});


Route::get('/contact', function () {
    return
        view('contact');
});




Route::resource('jobs', JobController::class);

