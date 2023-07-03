<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// Clientes
Route::get('/clientes', [ClientesController::class, 'Clientes'])
    ->middleware(['auth', 'verified'])->name('clientes');

// Cadastrar Clientes
Route::post('/cadastrarclientes', [ClientesController::class, 'cadastrarClientes'])
    ->middleware(['auth', 'verified'])->name('cadastrarclientes');

// Procurar Clientes
Route::get('/procurarclientes', [ClientesController::class, 'procurarClientes'])
    ->middleware(['auth', 'verified'])->name('procurarclientes');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
