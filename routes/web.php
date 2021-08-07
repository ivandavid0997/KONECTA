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
    return redirect()->route('index.clientes');
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->middleware('auth');


Route::get('/listado', [usuariosController::class,'index'])->name('index')->middleware('auth');
Route::get('/formulario', [usuariosController::class,'formulario'])->name('formulario')->middleware('auth');
Route::get('/editar/{id}', [usuariosController::class,'editar'])->name('editar')->middleware('auth');
Route::post('/guardar', [usuariosController::class,'guardar'])->name('guardar')->middleware('auth');
Route::get('/eliminar/{id}', [usuariosController::class,'eliminar'])->name('eliminar')->middleware('auth');
Route::post('/actualizar/{id}', [usuariosController::class,'update'])->name('actualizar')->middleware('auth');

Route::get('/listadoClientes', [clienteController::class,'index'])->name('index.clientes')->middleware('auth');
Route::get('/formularioClientes', [clienteController::class,'formulario'])->name('formulario.clientes')->middleware('auth');
Route::get('/editarCliente/{id}', [clienteController::class,'editar'])->name('editar.clientes')->middleware('auth');
Route::post('/guardarCliente', [clienteController::class,'guardar'])->name('guardar.clientes')->middleware('auth');
Route::get('/eliminarCliente/{id}', [clienteController::class,'eliminar'])->name('eliminar.clientes')->middleware('auth');
Route::post('/actualizarCliente/{id}', [clienteController::class,'update'])->name('actualizar.clientes')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');