<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\SubdirectorController;

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


//Carrera
Route::get('carreras',[CarreraController::class,'index'])->name('carreras.index');
Route::get('carreras/create',[CarreraController::class,'create'])->name('carreras.create');
Route::post('carreras',[CarreraController::class,'store'])->name('carreras.store');
Route::get('carreras/{carrera}',[CarreraController::class,'show'])->name('carreras.show');
Route::get('carreras/{carrera}/edit',[CarreraController::class,'edit'])->name('carreras.edit');
Route::match(['put','patch'],'carreras/{carrera}',[CarreraController::class,'update'])->name('carreras.update');
Route::delete('carreras/{carrera}',[CarreraController::class,'destroy'])->name('carreras.destroy');

//Subdirector
Route::get('subdirectors',[SubdirectorController::class,'index'])->name('subdirectors.index');
Route::get('subdirectors/create',[SubdirectorController::class,'create'])->name('subdirectors.create');
Route::post('subdirectors',[SubdirectorController::class,'store'])->name('subdirectors.store');
Route::get('subdirectors/{subdirector}',[SubdirectorController::class,'show'])->name('subdirectors.show');
Route::get('subdirectors/{subdirector}/edit',[SubdirectorController::class,'edit'])->name('subdirectors.edit');
Route::match(['put','patch'],'subdirectors/{subdirector}',[SubdirectorController::class,'update'])->name('subdirectors.update');
Route::delete('directors/{subdirector}',[SubdirectorController::class,'destroy'])->name('subdirectors.destroy');
