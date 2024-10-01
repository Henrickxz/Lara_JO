<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController; 

Route::get('/', [JogosController::class, 'mostrarHome'])->name('home');
Route::get('/cadastro-jogo',[JogosController::class, 'MostrarCadastroJogo'])->name('show-cadastro-jogo');

Route::post('/cadastro-jogo',[JogosController::class, 'CadastrarJogo'])->name('cadastro-jogo');

