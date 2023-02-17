<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatematicaController;
use App\Http\Controllers\MateriaController;
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
Route::get('materias/{materia}', [MateriaController::class,'show'])->name('materias.show');
Route::get('materias/{materia}/edit', [MateriaController::class,'edit'])->name('materias.edit');
Route::put('materias/{materia}', [MateriaController::class,'update'])->name('materias.update');
Route::delete('materias/{materia}', [MateriaController::class,'destroy'])->name('materias.destroy');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
