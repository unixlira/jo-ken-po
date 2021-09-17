<?php

use App\Http\Controllers\Jokenpo;
use Illuminate\Support\Facades\Route;


//Rota do Game Jokenpo

Route::get('/', [Jokenpo::class, 'home']);
Route::get('/jokenpo', [Jokenpo::class, 'index']);
Route::get('/rounds', [Jokenpo::class, 'rounds']);
Route::get('/round/{id}', [Jokenpo::class, 'round']);
Route::get('/edit/{id}', [Jokenpo::class, 'edit']);
Route::get('/delete/{id}', [Jokenpo::class, 'forceDelete']);
Route::post('/jokenpo', [Jokenpo::class, 'play'])->name('play');
Route::post('/update', [Jokenpo::class, 'update'])->name('update');
