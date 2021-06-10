<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasillaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EleccionController;
use App\Http\Controllers\ImeiautorizadoController;

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

Route::resources(['casilla'=>CasillaController::class]);
Route::resources(['candidato'=>CandidatoController::class]);
Route::resources(['funcionario'=>FuncionarioController::class]);
Route::resources(['rol'=>RolController::class]);
Route::resources(['eleccion'=>EleccionController::class]);
Route::resources(['imeiautorizado'=>ImeiautorizadoController::class]);