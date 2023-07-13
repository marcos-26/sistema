<?php

use App\Http\Controllers\SaleController;

Route::get('/vendas', [SaleController::class, 'lead'])
->middleware(['auth', 'verified'])->name('vendas');
