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
Route::group(['middleware' => 'web'] , function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class,'index'])->name('usuarios');
Route::get('/usuarios/novo', [App\Http\Controllers\UsuariosController::class,'new'])->name('cadastro');
Route::get('/usuarios/list', [App\Http\Controllers\UsuariosController::class,'list'])->name('list');
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class,'add'])->name('add');
Route::get('/usuarios/edit/{id}', [App\Http\Controllers\UsuariosController::class,'edit'])->name('edit');
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class,'update'])->name('update');
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class,'delete'])->name('delete');
