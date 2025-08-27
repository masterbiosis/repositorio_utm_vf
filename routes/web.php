<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarreraController;

use App\Http\Controllers\SubdirectorController;

use App\Http\Controllers\DirectortesiController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AsesorempresaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\LineaController;
use App\Mail\MailAlumnoFinalizadoMailable;
use App\Models\Asesorempresa;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('paginas.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//////////// EMAIL /////////////////////
Route::get('/validar_alumno/{alumno}',[MailAlumnoFinalizadoMailable::class,'validar_alumno'])->name('email.validar_alumno');


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

//Admin
Route::get('/asignar',[AdminController::class,'asignar'])->name('admin.asignar');
Route::post('/asignardata',[AdminController::class,'asignardata'])->name('admin.asignardata');


//Alumnos//
Route::resource('alumnos',AlumnoController::class);

//Carrera//
Route::resource('carreras',CarreraController::class);

//Programa educativo//
Route::resource('programas',ProgramaController::class);

//<<<<<<< HEAD
//Subdirector
Route::resource('subdirectors',SubdirectorController::class);

//Empresas//
Route::resource('empresas', EmpresaController::class);

//Director de Tesis//
Route::resource('directortesis', DirectortesiController::class);

//Ver estudianteas asignados
Route::get('directortesis/{directortesi}/asignados',[DirectortesiController::class,'alumnosAsignados'])->name('directortesis.asignados');

//Director de Carrera//
Route::resource('directorcarreras', SubdirectorController::class);

//Asesor Empresa
Route::resource('asesorempresas', AsesorempresaController::class);

//Lineas//
Route::resource('lineas', LineaController::class);

//DOCUMENTOS//
Route::resource('documentos', DocumentoController::class);


/*
Route::get('asesorempresas',[AsesorempresaController::class,'index'])->name('asesorempresas.index');
Route::get('asesorempresas/create',[AsesorempresaController::class,'create'])->name('asesorempresas.create');
Route::post('asesorempresas',[AsesorempresaController::class,'store'])->name('asesorempresas.store');
Route::get('asesorempresas/{asesorempresa}',[AsesorempresaController::class,'show'])->name('asesorempresas.show');
Route::get('asesorempresas/{asesorempresa}/edit',[AsesorempresaController::class,'edit'])->name('asesorempresas.edit');
Route::match(['put','patch'],'asesorempresas/{asesorempresa}',[AsesorempresaController::class,'update'])->name('asesorempresas.update');
Route::delete('asesorempresas/{asesorempresa}',[AsesorempresaController::class,'destroy'])->name('asesorempresas.destroy');
*/

/*
Route::get('alumnos',[AlumnoController::class,'index'])->name('alumnos.index');
Route::get('alumnos/create',[AlumnoController::class,'create'])->name('alumnos.create');
Route::post('alumnos',[AlumnoController::class,'store'])->name('alumnos.store');
Route::get('alumnos/{alumno}',[AlumnoController::class,'show'])->name('alumnos.show');
Route::get('alumnos/{alumno}/edit',[AlumnoController::class,'edit'])->name('alumnos.edit');
Route::match(['put','patch'],'alumnos/{alumno}',[AlumnoController::class,'update'])->name('alumnos.update');
Route::delete('alumnos/{alumno}',[AlumnoController::class,'destroy'])->name('alumnos.destroy');
*/

/*
Route::get('carreras',[CarreraController::class,'index'])->name('carreras.index');
Route::get('carreras/create',[CarreraController::class,'create'])->name('carreras.create');
Route::post('carreras',[CarreraController::class,'store'])->name('carreras.store');
Route::get('carreras/{carrera}',[CarreraController::class,'show'])->name('carreras.show');
Route::get('carreras/{carrera}/edit',[CarreraController::class,'edit'])->name('carreras.edit');
Route::match(['put','patch'],'carreras/{carrera}',[CarreraController::class,'update'])->name('carreras.update');
Route::delete('carreras/{carrera}',[CarreraController::class,'destroy'])->name('carreras.destroy');
*/

/*
Route::get('programas',[ProgramaController::class,'index'])->name('programas.index');
Route::get('programas/create',[ProgramaController::class,'create'])->name('programas.create');
Route::post('programas',[ProgramaController::class,'store'])->name('programas.store');
Route::get('programas/{programa}',[ProgramaController::class,'show'])->name('programas.show');
Route::get('programas/{programa}/edit',[ProgramaController::class,'edit'])->name('programas.edit');
Route::match(['put','patch'],'programas/{programa}',[ProgramaController::class,'update'])->name('programas.update');
Route::delete('programas/{programa}',[ProgramaController::class,'destroy'])->name('programas.destroy');
*/

/*
Route::get('subdirectors',[SubdirectorController::class,'index'])->name('subdirectors.index');
Route::get('subdirectors/create',[SubdirectorController::class,'create'])->name('subdirectors.create');
Route::post('subdirectors',[SubdirectorController::class,'store'])->name('subdirectors.store');
Route::get('subdirectors/{subdirector}',[SubdirectorController::class,'show'])->name('subdirectors.show');
Route::get('subdirectors/{subdirector}/edit',[SubdirectorController::class,'edit'])->name('subdirectors.edit');
Route::match(['put','patch'],'subdirectors/{subdirector}',[SubdirectorController::class,'update'])->name('subdirectors.update');
Route::delete('directors/{subdirector}',[SubdirectorController::class,'destroy'])->name('subdirectors.destroy');
*/

/*
Route::get('empresas',[EmpresaController::class,'index'])->name('empresas.index');
Route::get('empresas/create',[EmpresaController::class,'create'])->name('empresas.create');
Route::post('empresas',[EmpresaController::class,'store'])->name('empresas.store');
Route::get('empresas/{empresa}',[EmpresaController::class,'show'])->name('empresas.show');
Route::get('empresas/{empresa}/edit',[EmpresaController::class,'edit'])->name('empresas.edit');
Route::match(['put','patch'],'empresas/{empresa}',[EmpresaController::class,'update'])->name('empresas.update');
Route::delete('empresas/{empresa}',[EmpresaController::class,'destroy'])->name('empresas.destroy');
*/

/*
Route::get('directortesis',[DirectortesiController::class,'index'])->name('directortesis.index');
Route::get('directortesis/create',[DirectortesiController::class,'create'])->name('directortesis.create');
Route::post('directortesis',[DirectortesiController::class,'store'])->name('directortesis.store');
Route::get('directortesis/{directortesi}',[DirectortesiController::class,'show'])->name('directortesis.show');
Route::get('directortesis/{directortesi}/edit',[DirectortesiController::class,'edit'])->name('directortesis.edit');
Route::match(['put','patch'],'directortesis/{directortesi}',[DirectortesiController::class,'update'])->name('directortesis.update');
Route::delete('directortesis/{directortesi}',[DirectortesiController::class,'destroy'])->name('directortesis.destroy');
*/

/*
Route::get('directorcarreras',[SubdirectorController::class,'index'])->name('directorcarreras.index');
Route::get('directorcarreras/create',[SubdirectorController::class,'create'])->name('directorcarreras.create');
Route::post('directorcarreras',[SubdirectorController::class,'store'])->name('directorcarreras.store');
Route::get('directorcarreras/{directorcarrera}',[SubdirectorController::class,'show'])->name('directorcarreras.show');
Route::get('directorcarreras/{directorcarrera}/edit',[SubdirectorController::class,'edit'])->name('directorcarreras.edit');
Route::match(['put','patch'],'directorcarreras/{directorcarrera}',[SubdirectorController::class,'update'])->name('directorcarreras.update');
Route::delete('directorcarreras/{directorcarrera}',[SubdirectorController::class,'destroy'])->name('directorcarreras.destroy');
*/
//>>>>>>> origin/main

/*
Route::get('lineas',[LineaController::class,'index'])->name('lineas.index');
Route::get('lineas/create',[LineaController::class,'create'])->name('lineas.create');
Route::post('lineas',[LineaController::class,'store'])->name('lineas.store');
Route::get('lineas/{linea}',[LineaController::class,'show'])->name('lineas.show');
Route::get('lineas/{linea}/edit',[LineaController::class,'edit'])->name('lineas.edit');
Route::match(['put','patch'],'lineas/{linea}',[LineaController::class,'update'])->name('lineas.update');
Route::delete('lineas/{linea}',[LineaController::class,'destroy'])->name('lineas.destroy');
*/

/*
Route::get('documentos',[DocumentoController::class,'index'])->name('documentos.index');
Route::get('documentos/create',[DocumentoController::class,'create'])->name('documentos.create');
Route::post('documentos',[DocumentoController::class,'store'])->name('documentos.store');
Route::get('documentos/{documento}',[DocumentoController::class,'show'])->name('documentos.show');
Route::get('documentos/{documento}/edit',[DocumentoController::class,'edit'])->name('documentos.edit');
Route::match(['put','patch'],'documentos/{documento}',[DocumentoController::class,'update'])->name('documentos.update');
Route::delete('documentos/{documento}',[DocumentoController::class,'destroy'])->name('documentos.destroy');
*/
