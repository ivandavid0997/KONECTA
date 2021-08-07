<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\clienteController;

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


Route::get('/listado', [usuariosController::class,'index'])->name('index');
Route::get('/formulario', [usuariosController::class,'formulario'])->name('formulario');
Route::get('/editar/{id}', [usuariosController::class,'editar'])->name('editar');
Route::post('/guardar', [usuariosController::class,'guardar'])->name('guardar');
Route::get('/eliminar/{id}', [usuariosController::class,'eliminar'])->name('eliminar');
Route::post('/actualizar/{id}', [usuariosController::class,'update'])->name('actualizar');

Route::get('/listadoClientes', [clienteController::class,'index'])->name('index.clientes');
Route::get('/formularioClientes', [clienteController::class,'formulario'])->name('formulario.clientes');
Route::get('/editarCliente/{id}', [clienteController::class,'editar'])->name('editar.clientes');
Route::post('/guardarCliente', [clienteController::class,'guardar'])->name('guardar.clientes');
Route::get('/eliminarCliente/{id}', [clienteController::class,'eliminar'])->name('eliminar.clientes');
Route::post('/actualizarCliente/{id}', [clienteController::class,'update'])->name('actualizar.clientes');
