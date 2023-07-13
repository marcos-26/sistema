<?php

use App\Http\Controllers\ClientController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/clientes', [ClientController::class, 'Clientes'])->name('clientes');
    Route::get('/cadastrarclientes', [ClientController::class, 'Clientes'])->name('cadastrarclientes');
    Route::get('/procurarclientes', [ClientController::class, 'Clientes'])->name('procurarclientes');
});
