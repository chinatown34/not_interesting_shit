<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Главная страница
Route::get('/', ['as' => 'index', 'uses' => 'index@index', function()
{
}]);
// Base64
Route::match(['get', 'post'], '/base64', ['as' => 'base64', 'uses' => 'encoder@base64', function()
{
}]);
// Md5
Route::match(['get', 'post'], '/md5', ['as' => 'md5', 'uses' => 'encoder@md5', function()
{
}]);
// Sha1
Route::match(['get', 'post'], '/sha1', ['as' => 'sha1', 'uses' => 'encoder@sha1', function()
{
}]);
$router->resource('texts', 'TextController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');