<?php

use App\Http\Controllers\LeadController;

Route::get('/leads', [LeadController::class, 'lead'])
->middleware(['auth', 'verified'])->name('leads');
