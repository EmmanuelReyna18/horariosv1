<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;

// Alumnos
Route::controller(AlumnoController::class)->group(function(){
Route::get('/Alumnos.index', [AlumnoController::class, 'index'])->name('Alumnos.index');    // INDEX

Route::get('/Alumnos.create', [AlumnoController::class, 'create'])->name('Alumnos.create'); // CREATE
Route::post('/Alumnos.store', [AlumnoController::class, 'store'])->name('Alumnos.store');       

Route::get('/Alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos.edit');       // EDIT
Route::get('/Alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos.show');       // VER

Route::post('/Alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos.destroy');// DESRTOY
Route::post('/Alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos.update');//UPDATE       
});


// PUESTOS
Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('Puestos.index');    // INDEX
Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('Puestos.create'); // CREATE
Route::post('/Puestos.store', [PuestoController::class, 'store'])->name('Puestos.store');   

Route::get('/Puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('Puestos.edit');       // EDIT
Route::post('/Puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('Puestos.destroy');// DESRTOY/DELETE
Route::get('/Puestos.show/{puesto}', [PuestoController::class, 'show'])->name('Puestos.show');       // SHOW/VER
Route::post('/Puestos.update/{puesto}', [PuestoController::class, 'update'])->name('Puestos.update');//UPDATE   



Route::get('/', function () {
    return view('inicio');
});
 
Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
require __DIR__.'/auth.php';
