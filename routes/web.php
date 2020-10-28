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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/agregar', 'RolesController@store')->name('store');

Route::get('roles', 'RolesController@index');

Route::get('/editar/{id}','RolesController@edit')->name('editar');

Route::put('/update/{id}','RolesController@update')->name('update');

Route::delete('/eliminar/{id}','RolesController@destroy')->name('eliminar');

Route::get('/Roles', 'RolesController@index')->name('Roles');














/*Route::get('/', function () {
    $nombre = "Jorge";
    return view('prueba')->with('nombre',$nombre);
}); pasar datos a las vistas, se crea la variable dentro de la ruta
*/ 


/*Route::get('saludo/{nombre}',function($nombre){
    return "Saludos " . $nombre;
});    definir parametros obligatorios*/


/*Route::get('saludo/{nombre?}',function($nombre = "Invitado"){
    return "Saludos " . $nombre;
}); parametros opcionales */