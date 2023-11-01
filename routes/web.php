<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/Historial', [NoteController::class, 'Historial'])->name('historial');
Route::get('/Procedimientos_Create', [NoteController::class,'Procedimientos_create'])->name('procedimientos.create');
Route::get('/Welcome', [NoteController::class,'Welcome'])->name('Welcome');

