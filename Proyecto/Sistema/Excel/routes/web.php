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

Route::get('/prod', 'ProductController@index')->name('products');

Route::get('/', 'RegistroController@index')->name('registros');

Route::get('descargar-registros', 'RegistroController@excel')->name('registros.excel');

Route::get('descargar-productos', 'ProductController@excel')->name('products.excel');




Route::get('/Registros','RegistroController@index');
Route::get('/Registros/Alumnos','RegistroController@alumno');
Route::get('/Registros/Docentes','RegistroController@docente');

Route::get('/Usuarios/updateRFID/', 'UsuarioController@updateRFID')->name('updateRFID');

Route::resource('/Usuarios','UsuarioController');

Route::resource('/Materias','MateriaController');
Route::get('/nuevo', function () {
    return view('usuario.nuevo');
});
Auth::routes();
Route::view('/encender', 'encender');
Route::view('/cambiarRFID', 'usuario.cambiarRFID');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('bar-chart', 'ChartController@index');

//Route::resource('/python','PythonController@hola');
Route::get('/python','PythonController@updateRFID');

Route::get('Registros/export', 'RegistroExportController');
