<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;

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


Route::get('/listado', [usuariosController::class,'index'])->name('indexx');
Route::get('/editar/{id}', [usuariosController::class,'editar'])->name('editar');
Route::post('/guardar', [usuariosController::class,'guardar'])->name('guardar');
Route::get('/eliminar/{id}', [usuariosController::class,'eliminar'])->name('eliminar');
