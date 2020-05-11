<?php

use Illuminate\Http\Request;

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


Route::prefix('/user')->group(function () {

    Route::get('/', ['uses' => 'UserConrtoller@get']);
    Route::get('/{name_user}', ['uses' => 'UserController@detail']);
    Route::post('/', ['uses' => 'UserController@create']);
    Route::delete('/{user_id}', ['uses' => 'UserController@delete'])->where(['user_id' => '[0-9+]']);
    Route::put('/{user_id}', ['uses' => 'UserController@update'])->where(['user_id' => '[0-9+]']);
});

Route::prefix('/coach')->group(function () {

    Route::get('/', ['uses' => 'CoachConrtoller@get']);
    Route::get('/{coach_name}', ['uses' => 'CoachController@detail']);
    Route::post('/', ['uses' => 'CoachController@create']);
    Route::delete('/{coach_id}', ['uses' => 'CoachController@delete'])->where(['coach_id' => '[0-9+]']);
    Route::put('/{coach_id}', ['uses' => 'CoachController@update'])->where(['coach_id' => '[0-9+]']);
});

Route::prefix('/name_categories')->group(function () {

    Route::get('/', ['uses' => 'NameCategoriesConrtoller@get']);
    Route::get('/{name_categories}', ['uses' => 'NameCategoriesController@detail']);
    Route::post('/', ['uses' => 'NameCategoriesController@create']);
    Route::delete('/{name_categories_id}', ['uses' => 'NameCategoriesController@delete'])->where(['name_categories_id' => '[0-9+]']);
    Route::put('/{name_categories_id}', ['uses' => 'NameCategoriesController@update'])->where(['name_categories_id' => '[0-9+]']);
});

Route::prefix('/name_ithems')->group(function () {

    Route::get('/', ['uses' => 'NameIthemsConrtoller@get']);
    Route::get('/{name_ithems}', ['uses' => 'NameIthemsController@detail']);
    Route::post('/', ['uses' => 'NameIthemsController@create']);
    Route::delete('/{name_ithems_id}', ['uses' => 'NameIthemsController@delete'])->where(['name_ithems_id' => '[0-9+]']);
    Route::put('/{name_ithems_id}', ['uses' => 'NameIthemsController@update'])->where(['name_ithems_id' => '[0-9+]']);
});

Route::prefix('/name_diets')->group(function () {

    Route::get('/', ['uses' => 'NameDietsConrtoller@get']);
    Route::get('/{name_diets}', ['uses' => 'NameDietsController@detail']);
    Route::post('/', ['uses' => 'NameDietsController@create']);
    Route::delete('/{name_diets_id}', ['uses' => 'NameDietsController@delete'])->where(['name_diets_id' => '[0-9+]']);
    Route::put('/{name_diets_id}', ['uses' => 'NameDietsController@update'])->where(['name_diets_id' => '[0-9+]']);
});

