<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DirectortesiController;
use App\Http\Controllers\EmpresaController;
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


//Alumnos//
Route::get('alumnos',[AlumnoController::class,'index'])->name('alumnos.index');
Route::get('alumnos/create',[AlumnoController::class,'create'])->name('alumnos.create');
Route::post('alumnos',[AlumnoController::class,'store'])->name('alumnos.store');
Route::get('alumnos/{alumno}',[AlumnoController::class,'show'])->name('alumnos.show');
Route::get('alumnos/{alumno}/edit',[AlumnoController::class,'edit'])->name('alumnos.edit');
Route::match(['put','patch'],'alumnos/{alumno}',[AlumnoController::class,'update'])->name('alumnos.update');
Route::delete('alumnos/{alumno}',[AlumnoController::class,'destroy'])->name('alumnos.destroy');


//Empresas//
Route::get('empresas',[EmpresaController::class,'index'])->name('empresas.index');
Route::get('empresas/create',[EmpresaController::class,'create'])->name('empresas.create');
Route::post('empresas',[EmpresaController::class,'store'])->name('empresas.store');
Route::get('empresas/{empresa}',[EmpresaController::class,'show'])->name('empresas.show');
Route::get('empresas/{empresa}/edit',[EmpresaController::class,'edit'])->name('empresas.edit');
Route::match(['put','patch'],'empresas/{empresa}',[EmpresaController::class,'update'])->name('empresas.update');
Route::delete('empresas/{empresa}',[EmpresaController::class,'destroy'])->name('empresas.destroy');

//Director de Tesis//
Route::get('directortesis',[DirectortesiController::class,'index'])->name('directortesis.index');
Route::get('directortesis/create',[DirectortesiController::class,'create'])->name('directortesis.create');
Route::post('directortesis',[DirectortesiController::class,'store'])->name('directortesis.store');
Route::get('directortesis/{directortesi}',[DirectortesiController::class,'show'])->name('directortesis.show');
Route::get('directortesis/{directortesi}/edit',[DirectortesiController::class,'edit'])->name('directortesis.edit');
Route::match(['put','patch'],'directortesis/{directortesi}',[DirectortesiController::class,'update'])->name('directortesis.update');
Route::delete('directortesis/{directortesi}',[DirectortesiController::class,'destroy'])->name('directortesis.destroy');

//Director de Carrera//
Route::get('directorcarreras',[SubdirectorController::class,'index'])->name('directorcarreras.index');
Route::get('directorcarreras/create',[SubdirectorController::class,'create'])->name('directorcarreras.create');
Route::post('directorcarreras',[SubdirectorController::class,'store'])->name('directorcarreras.store');
Route::get('directorcarreras/{directorcarrera}',[SubdirectorController::class,'show'])->name('directorcarreras.show');
Route::get('directorcarreras/{directorcarrera}/edit',[SubdirectorController::class,'edit'])->name('directorcarreras.edit');
Route::match(['put','patch'],'directorcarreras/{directorcarrera}',[SubdirectorController::class,'update'])->name('directorcarreras.update');
Route::delete('directorcarreras/{directorcarrera}',[SubdirectorController::class,'destroy'])->name('directorcarreras.destroy');