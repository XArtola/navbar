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

Route::get('/', function () {
	return view('home');
})->name('home');

/*EMPLEADOS */
Route::get('/empleados', 'EmpleadoController@index')->name('empleados.index');
Route::get('/empleados/{id}', 'EmpleadoController@show')->name('empleados.show');
//Inserción de colaboración de empleado en proyecto
Route::post('/empleados', 'EmpleadoController@store')->name('empleados.store');

/*DEPARTAMENTOS */
Route::get('/departamentos', 'DepartamentoController@index')->name('departamentos.index');
Route::get('/departamentos/{id}', 'DepartamentoController@show')->name('departamentos.show');
//Muestra formulario para insertar empleados que serán empleados de un departamento o jefes
Route::get('/departamentos/{id}/manage','DepartamentoController@manage')->name('departamentos.manage');
//Inserta el empleado como jefe de departamento o parte del departamento en la bd
Route::post('/departamentos/setEmpleado','DepartamentoController@setEmpleado')->name('departamentos.setEmpleado');

/*PROYECTOS */
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos.index');
Route::get('/proyectos/create', 'ProyectoController@create')->name('proyectos.create');
Route::post('/proyectos', 'ProyectoController@store')->name('proyectos.store');
Route::get('/proyectos/{id}', 'ProyectoController@show')->name('proyectos.show');
Route::get('/proyectos/{id}/edit', 'ProyectoController@edit')->name('proyectos.edit');
Route::put('/proyectos/{id}', 'ProyectoController@update')->name('proyectos.update');
Route::delete('/proyectos/{id}', 'ProyectoController@destroy')->name('proyectos.destroy');

/*LISTADOS*/

Route::get('/listados/{tipo}', 'ListadoController@index')->name('listados.index');



/*
GET 	    /photos 	            index 	    photos.index
GET 	    /photos/create 	        create 	    photos.create
POST 	    /photos 	            store 	    photos.store
GET 	    /photos/{photo} 	    show 	    photos.show
GET 	    /photos/{photo}/edit 	edit 	    photos.edit
PUT/PATCH 	/photos/{photo} 	    update 	    photos.update
DELETE 	    /photos/{photo} 	    destroy 	photos.destroy
*/
