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

  Route::get('/documentacion', function () {
    return view('documentation');
  })->name('documentation');

  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/', 'PrincipalController@index')->name('principal');
  Route::get('/count', 'PrincipalController@count')->name('count');

  //Activity
  Route::get('actividad','ActivityController@index')->name('activity.index')->middleware('permiso:activity.index');
  Route::get('actividad/create','ActivityController@create')->name('activity.create')->middleware('permiso:activity.create');
  Route::post('actividad/store','ActivityController@store')->name('activity.store')->middleware('permiso:activity.create');
  Route::get('actividad/{id}','ActivityController@show')->name('activity.show')->middleware('permiso:activity.show');
  Route::get('actividad/{id}/edit','ActivityController@edit')->name('activity.edit')->middleware('permiso:activity.edit');
  Route::post('actividad/update/{id}','ActivityController@update')->name('activity.update')->middleware('permiso:activity.edit');
  Route::get('actividad/delete/{id}','ActivityController@destroy')->name('activity.destroy')->middleware('permiso:activity.destroy');

  //Device
  Route::get('equipo','DeviceController@index')->name('device.index')->middleware('permiso:device.index');
  Route::get('equipo/create','DeviceController@create')->name('device.create')->middleware('permiso:device.create');
  Route::post('equipo/store','DeviceController@store')->name('device.store')->middleware('permiso:device.create');
  Route::get('equipo/{id}','DeviceController@show')->name('device.show')->middleware('permiso:device.show');
  Route::get('equipo/{id}/edit','DeviceController@edit')->name('device.edit')->middleware('permiso:device.edit');
  Route::post('equipo/update/{id}','DeviceController@update')->name('device.update')->middleware('permiso:device.edit');
  Route::post('equipo/delete/{id}','DeviceController@destroy')->name('device.destroy')->middleware('permiso:device.destroy');

  Route::get('equipos','DeviceController@listarequipos');

  //Users
  Route::get('usuario', 'UserController@index')->name('users.index')->middleware('permiso:users.index');
  Route::get('usuario/{id}', 'UserController@show')->name('users.show')->middleware('permiso:users.show');
  Route::get('usuario/{id}/edit','UserController@edit')->name('users.edit')->middleware('permiso:users.edit');
  Route::post('usuario/update/{id}', 'UserController@update')->name('users.update')->middleware('permiso:users.edit');
  Route::delete('usuario/delete/{id}','UserController@destroy')->name('users.destroy')->middleware('permiso:users.destroy');

  Route::get('usuarios','UserController@listusers')->name('users.list')->middleware('permiso:users.index');
  Route::get('usuarios/test','UserController@test')->name('users.test')->middleware('permiso:users.test');

  //Roles
  Route::get('rol', 'RoleController@index')->name('roles.index')->middleware('permiso:roles.index');
  Route::get('rol/create', 'RoleController@create')->name('roles.create')->middleware('permiso:roles.create');    
  Route::post('rol/store', 'RoleController@store')->name('roles.store')->middleware('permiso:roles.create');    
	Route::get('rol/{role}', 'RoleController@show')->name('roles.show')->middleware('permiso:roles.show');
  Route::get('rol/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('permiso:roles.edit');
	Route::post('rol/update/{role}', 'RoleController@update')->name('roles.update')->middleware('permiso:roles.edit');
  Route::delete('rol/delete/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permiso:roles.destroy');
  
    
	Route::get('roles', 'RoleController@listroles')->name('roles.list')->middleware('permiso:roles.index');

  Route::get('roles/test','RoleController@test')->name('roles.test')->middleware('permiso:roles.test');

});

// Route::resource('usuario','UserController');
// 
// Route::group(['middleware' => ['permiso:users.index']], function(){
//     Route::get('notas/{id}/eliminar','NotasController@destroy')->name('notas.eliminar');
// });