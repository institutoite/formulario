<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatematicaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\FormulaController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\DimensionController;
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


Route::get('temas/{materia}', [TemaController::class,'index'])->name('temas.index');
Route::get('temas/crear/{materia}', [TemaController::class,'crear'])->name('temas.crear');
Route::post('temas', [TemaController::class,'store'])->name('temas.store');
Route::get('temas/show/{tema}', [TemaController::class,'show'])->name('temas.show');
Route::get('temas/{tema}/edit', [TemaController::class,'edit'])->name('temas.edit');
Route::put('temas/{tema}', [TemaController::class,'update'])->name('temas.update');
Route::delete('eliminar/tema/{tema}', [TemaController::class,'destroy'])->name('temas.eliminar');

Route::get('formulas/{tema}', [FormulaController::class,'index'])->name('formulas.index');
Route::get('formulas/create/{tema}', [FormulaController::class,'create'])->name('formulas.create');
Route::post('formulas', [FormulaController::class,'store'])->name('formulas.store');
Route::get('formulas/show/{formula}', [FormulaController::class,'show'])->name('formulas.show');
Route::get('formulas/{formula}/edit', [FormulaController::class,'edit'])->name('formulas.edit');
Route::put('formulas/{formula}', [FormulaController::class,'update'])->name('formulas.update');
Route::delete('eliminar/formula/{formula}', [FormulaController::class,'destroy'])->name('formulas.eliminar');

Route::get('variables/{formula}', [VariableController::class,'index'])->name('variables.index');
Route::get('variables/create/{formula}', [VariableController::class,'create'])->name('variables.create');
Route::get('variable/store', [VariableController::class,'guardarAjax'])->name('variables.store');
Route::get('variables/show/{variable}', [VariableController::class,'show'])->name('variables.show');
Route::get('editar/variable/{variable}', [VariableController::class,'edit'])->name('variables.edit');
Route::get('variable/update', [VariableController::class,'update'])->name('variables.update');
Route::delete('eliminar/variable/{variable}', [VariableController::class,'destroy'])->name('variables.eliminar');

Route::get('get/dimensiones', [DimensionController::class,'getDimension'])->name('dimensiones.get');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
