<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/clients', [ClienteController::class, 'index'])->name('clients');
Route::get('/clients/add', [ClienteController::class, 'add']);
Route::get('/clients/{id}', [ClienteController::class, 'show']);
Route::get('/clients/edit/{id}', [ClienteController::class, 'edit']);
Route::post('/clients/delete/{id}', [ClienteController::class, 'delete']);
Route::post('/clients/patch/{id}', [ClienteController::class, 'patch']);
Route::post('/client', [ClienteController::class, 'store']);
