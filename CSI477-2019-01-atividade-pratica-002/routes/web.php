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

Route::get('/', 'PaginasController@index');
Route::get('/MostrarProcePadrao', 'PaginasController@MostrarPad');
Route::resource('/procedures', 'ProcedureController');
Route::resource('/tests', 'TestController');
Route::resource('/users', 'UserController');
Route::resource('/operador','OperadorController');
Route::get('/adm', 'UserController@DadosADM');
Route::get('/Paciente', 'PaginasController@MostrarPad');

Route::get('/ExcluirProc','ProcedureController@destroy');

Route::get('/AdicionaPac','PacientController@index');
// Route::get('/', function () {
//     return view('welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
