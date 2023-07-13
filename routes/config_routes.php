<?php

use App\Http\Controllers\ConfigController;

Route::get('/configuracao', [ConfigController::class, 'config'])
->middleware(['auth', 'verified'])->name('configuracao');
