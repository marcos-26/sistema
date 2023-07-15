<?php

use App\Http\Controllers\ContactController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/contato', [ContactController::class, 'contact'])->name('contato');
    Route::get('/enviacontato', [ContactController::class, 'recebeContato'])->name('enviacontato');
});
