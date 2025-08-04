<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarreraController;

use App\Http\Controllers\SubdirectorController;

use App\Http\Controllers\DirectortesiController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProgramaController;


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

//Carrera//
Route::get('carreras',[CarreraController::class,'index'])->name('carreras.index');
Route::get('carreras/create',[CarreraController::class,'create'])->name('carreras.create');
Route::post('carreras',[CarreraController::class,'store'])->name('carreras.store');
Route::get('carreras/{carrera}',[CarreraController::class,'show'])->name('carreras.show');
Route::get('carreras/{carrera}/edit',[CarreraController::class,'edit'])->name('carreras.edit');
Route::match(['put','patch'],'carreras/{carrera}',[CarreraController::class,'update'])->name('carreras.update');
Route::delete('carreras/{carrera}',[CarreraController::class,'destroy'])->name('carreras.destroy');

//Programa educativo//
Route::get('programas',[ProgramaController::class,'index'])->name('programas.index');
Route::get('programas/create',[ProgramaController::class,'create'])->name('programas.create');
Route::post('programas',[ProgramaController::class,'store'])->name('programas.store');
Route::get('programas/{programa}',[ProgramaController::class,'show'])->name('programas.show');
Route::get('programas/{programa}/edit',[ProgramaController::class,'edit'])->name('programas.edit');
Route::match(['put','patch'],'programas/{programa}',[ProgramaController::class,'update'])->name('programas.update');
Route::delete('programas/{programa}',[ProgramaController::class,'destroy'])->name('programas.destroy');

//<<<<<<< HEAD
//Subdirector
Route::get('subdirectors',[SubdirectorController::class,'index'])->name('subdirectors.index');
Route::get('subdirectors/create',[SubdirectorController::class,'create'])->name('subdirectors.create');
Route::post('subdirectors',[SubdirectorController::class,'store'])->name('subdirectors.store');
Route::get('subdirectors/{subdirector}',[SubdirectorController::class,'show'])->name('subdirectors.show');
Route::get('subdirectors/{subdirector}/edit',[SubdirectorController::class,'edit'])->name('subdirectors.edit');
Route::match(['put','patch'],'subdirectors/{subdirector}',[SubdirectorController::class,'update'])->name('subdirectors.update');
Route::delete('directors/{subdirector}',[SubdirectorController::class,'destroy'])->name('subdirectors.destroy');


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
//>>>>>>> origin/main
