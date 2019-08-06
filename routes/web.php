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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PrincipalController@index')->name('principal');


Route::middleware(['auth'])->group(function () {
        
  Route::resource('equipo','EquipoController');
  Route::get('equipos','EquipoController@listarequipos');
  Route::resource('actividades','ActividadController');

  //Users
  Route::get('usuario', 'UserController@index')->name('users.index')
    ->middleware('permiso:users.index');

  Route::get('usuario/{id}', 'UserController@show')->name('users.show')
    ->middleware('permiso:users.show');

  Route::get('usuario/{id}/edit','UserController@edit')->name('users.edit')
    ->middleware('permiso:users.edit');

  Route::post('usuario/update/{id}', 'UserController@update')->name('users.update')
		->middleware('permiso:users.edit');

  Route::delete('usuario/{id}','UserController@destroy')->name('users.destroy')
    ->middleware('permiso:users.destroy');

  Route::get('usuarios','UserController@listusers')->name('listusers');

});

// Route::resource('usuario','UserController');
// 
// Route::group(['middleware' => ['permiso:users.index']], function(){
//     Route::get('notas/{id}/eliminar','NotasController@destroy')->name('notas.eliminar');
// });