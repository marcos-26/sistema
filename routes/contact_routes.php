<?php

use App\Http\Controllers\ContactController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/contato', [ContactController::class, 'contact'])->name('contato');
    Route::post('/enviacontato', [ContactController::class, 'recebeContato'])->name('enviacontato');
});
