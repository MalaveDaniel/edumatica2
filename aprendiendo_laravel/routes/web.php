<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'inicio'])->name("inicio");

Route::get('/detalle/{id}', [PageController::class, 'detalle'])->name("notas.detalle");

Route::post('/',[PageController::class, 'crear'])->name('notas.crear');

Route::get('/editar/{id}',[PageController::class, 'editar'])->name('notas.editar');

Route::put('/editar/{id}',[PageController::class, 'update'])->name('notas.update');

Route::delete('eliminar/{id}',[PageController::class, 'eliminar'])->name('notas.eliminar');

Route::get("fotos", [PageController::class, 'fotos'])->name("foto");

Route::get("noticias",[PageController::class, 'noticias'] )->name("noticias");


Route::get('nosotros/{nombre?}',[PageController::class, 'nosotros'] )->name('nosotros');

/*atajo*/
/*Route::view("galeria", "fotos",["numero" => 125]);*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
