<?php

use App\Http\Controllers\ClientController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/clientes', [ClientController::class, 'clientes'])->name('clientes');
    Route::post('/cadastrarclientes', [ClientController::class, 'cadastrarClientes'])->name('cadastrarclientes');
});
