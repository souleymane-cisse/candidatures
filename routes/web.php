<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SondageController;
use App\Http\Controllers\AdminController;

Route::get('/profile', [ProfileController::class, 'show'])->middleware(['auth'])->name('profile');

Route::get('/sondage1', [SondageController::class, 'sondage1'])->middleware(['auth'])->name('sondage1');
Route::post('/sondage1', [SondageController::class, 'storeSondage1'])->middleware(['auth']);

Route::get('/sondage2', [SondageController::class, 'sondage2'])->middleware(['auth'])->name('sondage2');
Route::post('/sondage2', [SondageController::class, 'storeSondage2'])->middleware(['auth']);

Route::get('/admin/etudiants', [AdminController::class, 'showEtudiants'])->middleware(['auth']);
Route::get('/admin/resultats-sondage1', [AdminController::class, 'showResultatsSondage1'])->middleware(['auth']);
Route::get('/admin/resultats-sondage2', [AdminController::class, 'showResultatsSondage2'])->middleware(['auth']);


require __DIR__.'/auth.php';
