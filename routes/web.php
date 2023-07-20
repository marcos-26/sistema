<?php

use App\Http\Controllers\ClientController;
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
require __DIR__ . '/client_routes.php';

// Contato
require __DIR__ . '/contact_routes.php';

// Lead
require __DIR__ . '/lead_routes.php';

// Sale
require __DIR__ . '/sale_routes.php';

// Config
require __DIR__ . '/config_routes.php';

// Report
require __DIR__ . '/report_routes.php';

// Integração Cep
Route::get('/consultaCpf/{cep}', [ClientController::class, 'consultaCep']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
