<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
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
    return view('clients');
});

Route::get('/clients', [ClienteController::class, 'index'])->name('clients');
Route::get('/clients/add', [ClienteController::class, 'add']);
Route::get('/clients/{id}', [ClienteController::class, 'show']);
Route::get('/clients/edit/{id}', [ClienteController::class, 'edit']);
Route::post('/clients/delete/{id}', [ClienteController::class, 'delete']);
Route::post('/clients/patch/{id}', [ClienteController::class, 'patch']);
Route::post('/clients', [ClienteController::class, 'store']);

Route::get('/products', [ProdutoController::class, 'index'])->name('products');
Route::get('/products/add', [ProdutoController::class, 'add']);
Route::get('/products/{id}', [ProdutoController::class, 'show']);
Route::get('/products/edit/{id}', [ProdutoController::class, 'edit']);
Route::post('/products/delete/{id}', [ProdutoController::class, 'delete']);
Route::post('/products/patch/{id}', [ProdutoController::class, 'patch']);
Route::post('/products', [ProdutoController::class, 'store']);

Route::get('/sales', [VendaController::class, 'index'])->name('sales');
Route::get('/sales/add', [VendaController::class, 'add']);
Route::get('/sales/{id}', [VendaController::class, 'show']);
Route::post('/sales', [VendaController::class, 'store']);
