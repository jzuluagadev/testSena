<?php

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
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/categoria', [UserController::class, 'index']);
Route::post('/app/categoria/registrar', [UserController::class, 'store']);
Route::put('/app/categoria/actualizar', [UserController::class, 'update']);
Route::delete('/app/categoria/actualizar', [UserController::class, 'destroy']);

