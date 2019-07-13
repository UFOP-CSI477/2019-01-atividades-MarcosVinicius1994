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

/*
Nas routes eu defini as chamadas pelas prorias fuções dentro do controler, pois,
neste caso não temos tantas chamadas dos metodos padrões do controler(CRUD).
*/
Route::resource('/trans','TransController');
Route::resource('/tipos','TiposController');
Route::resource('/clientes','ClientesController');
Route::get('/', 'PaginasController@index');
Route::get('/areaGeral','PaginasController@area_geral' );
Route::get('/RelatoTipos','TiposController@index' );
Route::get('/RelatoClientes','ClientesController@index');
Route::get('/areaClientes', 'PaginasController@area_cliente');
Route::get('/RelatoTransf', 'ClientesController@recuperaIDcliente');
// Route::get('/RecuperaClienteTrans/{$id}', 'TransController@recuperaId');
Route::get('/InclusaoTrans', 'TransController@create');
Route::get('/Ver_relatorio', 'ClientesController@VerRelatorioClientes');
Route::get('/areaAdministra','PaginasController@areaAdmin');

Route::get('/InclusaoTipos','TiposController@create');
Route::get('/InclusaoClientes','ClientesController@create');
Route::get('/VoltarADM','PaginasController@index');
Route::get('/VoltarCliente','PaginasController@index');
Route::get('/VoltarPacient','PaginasController@index');
// Route::get('/InclusaoTrans', '');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
