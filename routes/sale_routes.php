<?php

use App\Http\Controllers\SaleController;

Route::get('/vendas', [SaleController::class, 'sale'])
->middleware(['auth', 'verified'])->name('vendas');
