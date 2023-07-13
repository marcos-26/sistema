<?php

use App\Http\Controllers\ReportController;

Route::get('/relatorio', [ReportController::class, 'report'])
->middleware(['auth', 'verified'])->name('relatorio');
