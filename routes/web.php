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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware(['auth'])->group(function () {

  Route::get('/bienvenido', function () {
    return view('bienvenido');
  });

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/', 'PrincipalController@index')->name('principal');

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

  Route::delete('usuario/delete/{id}','UserController@destroy')->name('users.destroy')
    ->middleware('permiso:users.destroy');

  Route::get('usuarios','UserController@listusers')->name('users.list')
    ->middleware('permiso:users.index');

  Route::get('usuarios/test','UserController@test')->name('users.test')
    ->middleware('permiso:users.test');

  //Roles
  Route::get('rol', 'RoleController@index')->name('roles.index')
    ->middleware('permiso:roles.index');

  Route::get('rol/create', 'RoleController@create')->name('roles.create')
    ->middleware('permiso:roles.create');
    
  Route::post('rol/store', 'RoleController@store')->name('roles.store')
    ->middleware('permiso:roles.create');
    
	Route::get('rol/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permiso:roles.show');

  Route::get('rol/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permiso:roles.edit');

	Route::post('rol/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permiso:roles.edit');

	Route::delete('rol/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permiso:roles.destroy');
    
	Route::get('roles', 'RoleController@listroles')->name('roles.list')
		->middleware('permiso:roles.index');


    

});

// Route::resource('usuario','UserController');
// 
// Route::group(['middleware' => ['permiso:users.index']], function(){
//     Route::get('notas/{id}/eliminar','NotasController@destroy')->name('notas.eliminar');
// });