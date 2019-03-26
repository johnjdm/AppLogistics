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

//Routes del Aplicativo despues del Loguearse
Route::middleware(['auth'])->group(function () {
  //Perfil
  Route::get('/profile', 'ProfileController@index')->name('profile')
    ->middleware('permission:profile.index');

  Route::get('/profile/updateUser', 'ProfileController@updateUser')->name('updateUser')
    ->middleware('permission:profile.index');

  Route::post('/profile/updateUserVisit', 'ProfileController@updateUserVisit')->name('userVisit.update')
    ->middleware('permission:profile.index');

  Route::post('/profile/store', 'ProfileController@store')->name('profile.store')
    ->middleware('permission:profile.index');

  //Roles
  Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

  Route::get('roles', 'RoleController@index')->name('roles.index')
  	->middleware('permission:roles.index');

  Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

  Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

  Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
  	->middleware('permission:roles.show');

  Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
  	->middleware('permission:roles.destroy');

  Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
  	->middleware('permission:roles.edit');

  //Users
  Route::get('users', 'UserController@index')->name('users.index')
	  ->middleware('permission:users.index');

  Route::put('users/{role}', 'UserController@update')->name('users.update')
  	->middleware('permission:users.edit');

  Route::get('users/{role}', 'UserController@show')->name('users.show')
  	->middleware('permission:users.show');

  Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
  	->middleware('permission:users.destroy');

  Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
  	->middleware('permission:users.edit');

  //Perfiles de los Usuarios empleados
  Route::post('profilesEmpl/store', 'UserEmplController@store')->name('profilesEmpl.store')
    ->middleware('permission:profilesEmpl.create');

  Route::get('profilesEmpl', 'UserEmplController@index')->name('profilesEmpl.index')
    ->middleware('permission:profilesEmpl.index');

  Route::get('profilesEmpl/create', 'UserEmplController@create')->name('profilesEmpl.create')
    ->middleware('permission:profilesEmpl.create');

  Route::put('profilesEmpl/{role}', 'UserEmplController@update')->name('profilesEmpl.update')
    ->middleware('permission:profilesEmpl.edit');

  Route::get('profilesEmpl/{role}', 'UserEmplController@show')->name('profilesEmpl.show')
    ->middleware('permission:profilesEmpl.show');

  Route::delete('profilesEmpl/{role}', 'UserEmplController@destroy')->name('profilesEmpl.destroy')
    ->middleware('permission:profilesEmpl.destroy');

  Route::get('profilesEmpl/{role}/edit', 'UserEmplController@edit')->name('profilesEmpl.edit')
    ->middleware('permission:profilesEmpl.edit');

  //Perfil de los Usuarios Empleados con relacion al Peerfil de Ventas
  Route::get('profileSales', 'profileSalesController@index')->name('profileSales.index')
    ->middleware('permission:profileSales.index');

});
