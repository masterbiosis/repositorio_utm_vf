<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


///////////////TESTING//////////////
Route::get('/bootstrap', function(){
    return view('test.bootstrap');
});

Route::get('/js', function () {
        return view('test.js');
});

Route::get('/sweet', function () {
    return view('test.sweet');
});
