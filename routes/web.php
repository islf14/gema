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

    // Route::resource('usuario','UserController');
    
    // Route::group(['middleware' => ['permiso:users.index']], function(){
    //     Route::get('notas/{id}/eliminar','NotasController@destroy')->name('notas.eliminar');
    // });
    Route::get('usuario', 'UserController@index')->name('users.index')
		->middleware('permiso:users.index');

    Route::get('/usuarios','UserController@listusers')->name('listusers');

});

// Route::get('actividades')

// Route::get('/home', 'HomeController@index')->name('home');
