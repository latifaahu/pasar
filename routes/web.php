<?php

use App\Http\Controllers\PasarController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasar', [PasarController::class, 'index']);
Route::post('/pasar', [PasarController::class, 'store']);
Route::get('/pasar/create', [PasarController::class, 'create']);
Route::get('/pasar/{pasar}/edit', [PasarController::class, 'edit']);
Route::put('/pasar/{pasar}', [PasarController::class, 'update']);
Route::get('/pasar/{pasar}/delete', [PasarController::class, 'destroy']);

Route::get('/tenant', [TenantController::class, 'index']);
Route::post('/tenant', [TenantController::class, 'store']);
Route::get('/tenant/create', [TenantController::class, 'create']);
Route::get('/tenant/{tenant}/edit', [TenantController::class, 'edit']);
Route::put('/tenant/{tenant}', [TenantController::class, 'update']);
Route::get('/tenant/{tenant}/delete', [TenantController::class, 'destroy']);

// bagian pemilik
Route::get('/pemilik', [PemilikController::class, 'index']);






// bagian pengelola
Route::get('/pengelola', [PengelolaController::class, 'index']);
Route::post('/pengelola', [PengelolaController::class, 'store']);
Route::get('/pengelola/create', [PengelolaController::class, 'create']);
Route::get('/pengelola/{pengelola}/edit', [PengelolaController::class, 'edit']);
Route::put('/pengelola/{pengelola}', [PengelolaController::class, 'update']);
Route::get('/pengelola/{pengelola}/delete', [PengelolaController::class, 'destroy']);


Route::get('/modals', function () {
   return view('modals', [
    "active" => ""
   ]);
});
