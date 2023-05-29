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

Route::get('/', ['uses' => 'LoginController@index']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

Route::get('/welcome', ['uses' =>  'LoginController@welcome']);


//rota login
Route::get('/login', ['uses' => 'LoginController@index']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'LoginController@auth']);
Route::get('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);

//Route::get('user', ['as' => 'user.index', 'uses' => 'UsersController@index']);

Route::resource('user', 'UsersController');
Route::resource('instituition', 'InstituitionsController');
Route::resource('group', 'GroupsController');
Route::resource('instituition.product', 'ProductsController');

Route::post('group/{group_id}/user', ['as' => 'group.user.store', 'uses' => 'GroupsController@userStore']);


