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

Route::get('/teams', ['as' => 'all-teams', 'uses'=>'TeamsController@index']);

Route::get('/teams/{id}', ['as' =>'single-team', 'uses'=>'TeamsController@show']);

Route::get('/players/{id}', ['as' =>'single-player', 'uses' =>'PlayersController@index']);

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::post('teams/{teamId}/comments', ['as'=>'comments-team', 'uses' => 'CommentsController@store']);

Route::get('/verify/{id}', 'LoginController@verify');

Route::get('/comments/forbidden', 'CommentsController@forbidden')->name('forbiddenComment');


