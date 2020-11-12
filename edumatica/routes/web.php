<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class,)->name("home");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('materias.home');
})->name('dashboard');

Route::get('materias', [MateriaController::class, 'index']);

Route::get('materias/Espacios vectoriales', [MateriaController::class, 'EV'])->name('EV');

Route::get('materias/ejercicios Espacios vectoriales', [MateriaController::class, 'ejercicios_EV'])->name('ejercicios_EV');

Route::get('materias/respuestas ejercicios Espacios vectoriales', [MateriaController::class, 'reEV'])->name('reEV');

Route::get('materias/Operaciones con matrices', [MateriaController::class, 'OM'])->name('OM');

Route::get('materias/ejercicios Operaciones con matrices', [MateriaController::class, 'EOM'])->name('EOM');

Route::get('materias/respuestas ejercicios Operaciones con matrices', [MateriaController::class, 'REOM'] )->name('REOM');

Route::get('materias/Determinantes', [MateriaController::class, 'Det'] )->name('Det');

Route::get('materias/ejercicios Determinantes', [MateriaController::class, 'EDet'] )->name('EDet');

Route::get('materias/respuestas ejercicios Determinantes', [MateriaController::class, 'REDet'] )->name('REDet');

Route::get('materias/Sistema de ecuaciones lineales', [MateriaController::class, 'Sel'] )->name('Sel');

Route::get('materias/ejercicios Sistema de ecuaciones lineales', [MateriaController::class, 'ESel'] )->name('ESel');

Route::get('materias/respuestas ejercicios Sistema de ecuaciones lineales', [MateriaController::class, 'RESel'] )->name('RESel');

