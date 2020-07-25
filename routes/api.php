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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'auth'], function () {

    Route::post('login', 'AuthController@login');
  
    Route::group(['middleware' => 'auth:api'], function() {

        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');

    });
});

Route::group(['prefix' => 'packages'], function () {

	Route::middleware('auth:api','proveedor')->post('/proveedor', 'PackagesController@store' );

	Route::middleware('auth:api','almacen')->get('/almacen/index', 'PackagesController@index' );

	Route::middleware('auth:api','almacen')->put('/almacen/{code}', 'PackagesController@update' );

	Route::middleware('auth:api','cliente')->get('/cliente/{code}', 'PackagesController@show' );

	Route::middleware('auth:api','cliente')->put('/cliente/{code}', 'PackagesController@update' );

});