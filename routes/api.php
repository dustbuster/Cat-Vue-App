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

// Route::middleware('auth:api')->get('user', function (Request $request) {
//     return $request->user();
// });

Route::get('cats', 'CatController@index');
Route::group(['prefix' => 'book'], function () {
    Route::post('add', 'CatController@add');
    Route::get('edit/{id}', 'CatController@edit');
    Route::post('update/{id}', 'CatController@update');
    Route::delete('delete/{id}', 'CatController@delete');
});
