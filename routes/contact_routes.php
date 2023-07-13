<?php

use App\Http\Controllers\ContactController;

Route::get('/contato', [ContactController::class, 'contact'])
->middleware(['auth', 'verified'])->name('contato');
