<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return json_decode(["status" => 200]);
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
