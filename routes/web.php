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
Route::get('/autocompletarMarcaNeumatico', 'BusquedaController@autocompletarMarcaNeumatico');

/*Rutas Usuario*/
Route::post('/validarUsuario','UsuarioController@validarUsuario');
Route::name('menuAdministrador_path')->get('/menuAdmin','UsuarioController@vistaAdministrador');
Route::name('menuUsuario_path')->get('/menuUser','UsuarioController@vistaUsuario');
Route::name('agregarUsuario_path')->get('/menuAdmin/agregarUsuario','UsuarioController@vistaAgregar');
Route::post('/agregarUsuario','UsuarioController@crear');
Route::name('editarUsuario_path')->get('/menuAdmin/editarUsuario/{usuario}','UsuarioController@vistaEditar');
Route::name('editarUsuario_path')->put('/menuAdmin/editarUsuario/{usuario}','UsuarioController@editarUsuario');
Route::name('eliminarUsuario_path')->delete('/menuAdmin/eliminarUsuario/{usuario}','UsuarioController@eliminarUsuario');

/*Rutas Neumatico*/
Route::name('agregarNeumatico_path')->get('/menuAdmin/agregarNeumatico','NeumaticoController@vistaAgregar');
Route::post('/agregarNeumatico','NeumaticoController@crear');
Route::name('editarNeumatico_path')->get('/menuAdmin/editarNeumatico/{neumatico}','NeumaticoController@vistaEditar');
Route::name('editarNeumatico_path')->put('/menuAdmin/editarNeumatico/{neumatico}','NeumaticoController@editarNeumatico');
Route::name('eliminarNeumatico_path')->delete('/menuAdmin/eliminarNeumatico/{neumatico}','NeumaticoController@eliminarNeumatico');

/*Rutas Repuesto*/
Route::name('agregarRepuesto_path')->get('/menuAdmin/agregarRepuesto','RepuestoController@vistaAgregar');
Route::post('/agregarRepuesto','RepuestoController@crear');
Route::name('editarRepuesto_path')->get('/menuAdmin/editarRepuesto/{repuesto}','RepuestoController@vistaEditar');
Route::name('editarRepuesto_path')->put('/menuAdmin/editarRepuesto/{repuesto}','RepuestoController@editarRepuesto');
Route::name('eliminarRepuesto_path')->delete('/menuAdmin/eliminarRepuesto/{repuesto}','RepuestoController@eliminarRepuesto');

/*Rutas Sucursal*/
Route::name('agregarSucursal_path')->get('/menuAdmin/agregarSucursal','SucursalController@vistaAgregar');
Route::post('/agregarSucursal','SucursalController@crear');
Route::name('editarSucursal_path')->get('/menuAdmin/editarSucursal/{sucursal}','SucursalController@vistaEditar');
Route::name('editarSucursal_path')->put('/menuAdmin/editarSucursal/{sucursal}','SucursalController@editarSucursal');
Route::name('eliminarSucursal_path')->delete('/menuAdmin/eliminarSucursal/{sucursal}','SucursalController@eliminarSucursal');

/*Liberar datos de session*/
Route::name('cerrarSesion_path')->get('/cerrarSesion','UsuarioController@cerrarSesion');

/*Rutas venta*/
Route::name('agregarNeumaticoCarro_path')->get('/menuUser/agregarNeumaticoCarro','VentaController@agregarNeumaticoCarrito');
