<?php

use App\Http\Controllers\ClientController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/clientes', [ClientController::class, 'Clientes'])->name('clientes');
    Route::post('/cadastrarclientes', [ClientController::class, 'cadastrarClientes'])->name('cadastrarclientes');
    Route::get('/procurarclientes', [ClientController::class, 'procurarClientes'])->name('procurarclientes');
});
