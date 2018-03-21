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
    return view('welcome');
});

Route::get('/empleados', 'EmpleadoController@index');
Route::get('/empleados/create', 'EmpleadoController@create');
Route::post('/empleados/store', 'EmpleadoController@store');
// Route::get('/empleados', function(){
// 	return view('Empleados.index');
// });
// Route::group(['middleware' => ['auth'], 'prefix' => 'recursos_humanos', 'as' => 'recursos_humanos.'], function(){
// 	// Rutas de empleados
// 	Route::resource('empleados', 'Rhumanos\EmpleadoController');
// });

