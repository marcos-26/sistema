<?php

use App\Http\Controllers\LeadController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/leads', [LeadController::class, 'lead'])->name('leads');
    Route::post('/cadastrarleads', [LeadController::class, 'cadastrarLeads'])->name('cadastrarleads');
});
