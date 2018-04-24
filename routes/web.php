<?php

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

Route::name('agregarUsuario_path')->get('/mantenedorUsuario/agregarUsuario','UsuarioController@vistaAgregar');
Route::name('editarUsuario_path')->get('/mantenedorUsuario/editarUsuario/{usuario}','UsuarioController@vistaEditar');
Route::name('editarUsuario_path')->put('/mantenedorUsuario/editarUsuario/{usuario}','UsuarioController@editarUsuario');
Route::name('eliminarUsuario_path')->delete('/mantenedorUsuario/{usuario}','UsuarioController@eliminarUsuario');
Route::get('/agregarUsuario','UsuarioController@vistaAgregar');
Route::get('/mantenedorUsuario','UsuarioController@listaUsuarios');
Route::post('/agregarUsuario','UsuarioController@crear');


