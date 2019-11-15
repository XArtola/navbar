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


Route::get('/empleados', 'EmpleadoController@index')->name('empleados.index');
Route::get('/departamentos', 'DepartamentoController@index')->name('departamentos.index');
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos.index');

