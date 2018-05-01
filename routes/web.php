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

Route::name('index_path')->get('/','UsuarioController@vistaIndex');
Route::post('/registrarUsuario','Auth\LoginController@registrarUsuario');

/*Rutas Usuario*/
Route::post('/validarUsuario','UsuarioController@validarUsuario');
Route::name('menuAdministrador_path')->get('/menuAdmin','UsuarioController@vistaAdministrador');
Route::name('agregarUsuario_path')->get('/mantenedorUsuario/agregarUsuario','UsuarioController@vistaAgregar');
Route::post('/agregarUsuario','UsuarioController@crear');
Route::name('editarUsuario_path')->get('/mantenedorUsuario/editarUsuario/{usuario}','UsuarioController@vistaEditar');
Route::name('editarUsuario_path')->put('/mantenedorUsuario/editarUsuario/{usuario}','UsuarioController@editarUsuario');
Route::name('eliminarUsuario_path')->delete('/mantenedorUsuario/{usuario}','UsuarioController@eliminarUsuario');

/*Rutas Neumatico*/
Route::name('agregarNeumatico_path')->get('/mantenedorNeumatico/agregarNeumatico','NeumaticoController@vistaAgregar');
Route::post('/agregarNeumatico','NeumaticoController@crear');
Route::name('editarNeumatico_path')->get('/mantenedorNeumatico/editarNeumatico/{neumatico}','NeumaticoController@vistaEditar');
Route::name('editarNeumatico_path')->put('/mantenedorNeumatico/editarNeumatico/{neumatico}','NeumaticoController@editarNeumatico');
Route::name('eliminarNeumatico_path')->delete('/mantenedorNeumatico/{neumatico}','NeumaticoController@eliminarNeumatico');

/*Rutas Repuesto*/
Route::name('agregarRepuesto_path')->get('/mantenedorRepuesto/agregarRepuesto','RepuestoController@vistaAgregar');
Route::post('/agregarRepuesto','RepuestoController@crear');
Route::name('editarRepuesto_path')->get('/mantenedorRepuesto/editarRepuesto/{repuesto}','RepuestoController@vistaEditar');
Route::name('editarRepuesto_path')->put('/mantenedorRepuesto/editarRepuesto/{repuesto}','RepuestoController@editarRepuesto');
Route::name('eliminarRepuesto_path')->delete('/mantenedorRepuesto/{repuesto}','RepuestoController@eliminarRepuesto');


