<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/users/create',"App\Http\Controllers\UsersController@create");

Route::post('/user', "App\Http\Controllers\UsersController@store");

Route::get('/users/{user}', "App\Http\Controllers\UsersController@show");

Route::get('users/{user}/edit', "App\Http\Controllers\UsersController@edit");

Route::patch('users/{user}', "App\Http\Controllers\UsersController@update");

Route::delete('users/{user}', "App\Http\Controllers\UsersController@destroy");



Route::get('/addresses/create',"App\Http\Controllers\AddressesController@create");

Route::post('/address', "App\Http\Controllers\AddressesController@store");

Route::get('/addresses/{address}', "App\Http\Controllers\AddressesController@show");

Route::get('addresses/{address}/edit', "App\Http\Controllers\AddressesController@edit");

Route::patch('addresses/{address}', "App\Http\Controllers\AddressesController@update");

Route::delete('addresses/{address}', "App\Http\Controllers\AddressesController@destroy");














