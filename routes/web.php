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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// funcionarios routes

Route::get('/funcionarios', 'FuncionarioController@index')->name('index_funcionario');

Route::get('/funcionarios/novo', 'FuncionarioController@create')->name('create_funcionario');

Route::get('/funcionarios/{id}/editar', 'FuncionarioController@edit')->name('edit_funcionario');

Route::post('/funcionarios', 'FuncionarioController@store')->name('store_funcionario');

Route::put('/funcionarios/{id}', 'FuncionarioController@update')->name('update_funcionario');

Route::delete('/funcionarios/{id}', 'FuncionarioController@destroy')->name('destroy_funcionario');

// departamentos routes
Route::get('/departamentos', 'DepartamentoController@index')->name('index_departamento');

Route::get('/departamentos/novo', 'DepartamentoController@create')->name('create_departamento');

Route::get('/departamentos/{id}/editar', 'DepartamentoController@edit')->name('edit_departamento');

Route::post('/departamentos', 'DepartamentoController@store')->name('store_departamento');

Route::put('/departamentos/{id}', 'DepartamentoController@update')->name('update_departamento');

Route::delete('/departamentos/{id}', 'DepartamentoController@destroy')->name('destroy_departamento');
