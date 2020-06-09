<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('todo', 'TodoController@index');
Route::get('todo/{todo}', 'TodoController@show');
Route::put('todo/{todo}', 'TodoController@update');
Route::patch('todo/{todo}', 'TodoController@update');
Route::post('todo', 'TodoController@store');
Route::delete('todo/{todo}', 'TodoController@destroy');