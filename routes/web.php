<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

// Ruta normal (lista de items)
Route::get('/', [CursoController::class, 'index'])->name('cursos.index');

// Ruta con parámetro (detalle de item)
Route::get('/cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');