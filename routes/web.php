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

/*EMPLEADOS */
Route::get('/empleados', 'EmpleadoController@index')->name('empleados.index');
Route::get('/empleados/{id}', 'EmpleadoController@show')->name('empleados.show');

/*DEPARTAMENTOS */
Route::get('/departamentos', 'DepartamentoController@index')->name('departamentos.index');

/*PROYECTOS */
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos.index');
Route::get('/proyectos/{id}', 'ProyectoController@show')->name('proyectos.show');
Route::get('/proyectos/create', 'ProyectoController@create')->name('proyectos.create');
Route::post('/proyectos', 'ProyectoController@store')->name('proyectos.store');



