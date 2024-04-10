<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi.siamo');

Route::get('/i-nostri-valori', [PublicController::class, 'valori'])->name('valori');