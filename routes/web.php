<?php
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PublicacionController;

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

//Laboratorio
Route::get('/login',[ClienteController::class,'viewLogin']);
Route::get('/inicio',[ClienteController::class,'viewInicio']);
Route::get('/clientes/registro',[ClienteController::class,'viewFormulario']);
Route::post('/clientes/guardar',[ClienteController::class,'guardar']);
Route::post('/clientes/guardar2',[ClienteController::class,'guardar2']);
Route::post('/loginAcceso',[ClienteController::class,'acceso']);
Route::get('/clientes',[ClienteController::class,'viewClientes']);
Route::get('/suscripciones',[PublicacionController::class,'viewSuscribe']);
Route::post('/suscripciones/guardar',[PublicacionController::class,'guardar']);
