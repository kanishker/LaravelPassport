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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test','Api\BlogController@viewBlogs');

Route::post('create-newBlog','Api\BlogController@createBlog');


//Api Login
Route::get('testuser','Api\LoginController@alluser');
Route::post('newuser','Api\LoginController@register');
Route::post('login','Api\LoginController@login');
Route::middleware('auth:api')->post('logout','Api\LoginController@logout');
Route::middleware('auth:api')->post('testroute12','Api\LoginController@testauth');