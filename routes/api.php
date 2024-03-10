<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'App\Http\Middleware\Authenticate',
    'prefix' => 'category',
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    Route::get('/', 'CategoryController@index')->middleware('permission:category.view');
    Route::post('/', 'CategoryController@store')->middleware('permission:category.create');
    Route::get('/{id}', 'CategoryController@show')->middleware('permission:category.view');
    Route::put('/{id}', 'CategoryController@update')->middleware('permission:category.edit');
    Route::delete('/{id}', 'CategoryController@destroy')->middleware('permission:category.delete');
});



