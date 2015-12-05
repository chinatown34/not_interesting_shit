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
Route::match(['get', 'post'], '/base64', ['as' => 'base64', 'uses' => 'base64@index', function()
{
}]);