<?php

use App\Http\Controllers\ReportController;

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/relatorio', [ReportController::class, 'report'])->name('relatorio');
    Route::post('/cadastrarrelatorio', [ReportController::class, 'cadastrarRelatorio'])->name('cadastrarrelatorio');

});
