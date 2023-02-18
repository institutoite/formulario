<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatematicaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\FormulaController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\EjemploController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('matematicas',[MatematicaController::class, 'index']); 

Route::get('materias', [MateriaController::class,'index'])->name('materias.index');
Route::get('materias/create', [MateriaController::class,'create'])->name('materias.create');
Route::post('materias', [MateriaController::class,'store'])->name('materias.store');
Route::get('materias/show/{materia}', [MateriaController::class,'show'])->name('materias.show');
Route::get('materias/{materia}/edit', [MateriaController::class,'edit'])->name('materias.edit');
Route::put('materias/{materia}', [MateriaController::class,'update'])->name('materias.update');
Route::delete('eliminar/materia/{materia}', [MateriaController::class,'destroy'])->name('materias.eliminar');


Route::get('temas', [TemaController::class,'index'])->name('temas.index');
Route::get('temas/create', [TemaController::class,'create'])->name('temas.create');
Route::post('temas', [TemaController::class,'store'])->name('temas.store');
Route::get('temas/show/{tema}', [TemaController::class,'show'])->name('temas.show');
Route::get('temas/{tema}/edit', [TemaController::class,'edit'])->name('temas.edit');
Route::put('temas/{tema}', [TemaController::class,'update'])->name('temas.update');
Route::delete('eliminar/tema/{tema}', [TemaController::class,'destroy'])->name('temas.eliminar');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
