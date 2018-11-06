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

Route::get('/', 'CharacterController@index')->name('home');
Route::group(['prefix' => 'characters'], function() {
    Route::post('getStats', 'CharacterController@ajaxLoadStats');
    Route::get('create', 'CharacterController@create');
    Route::post('create/save', 'CharacterController@createSave');
    Route::get('{id}', 'CharacterController@show');
    Route::get('{id}/edit', 'CharacterController@edit');
    Route::post('{id}/edit/save', 'CharacterController@editSave');
    Route::post('{id}/delete', 'CharacterController@delete');
});

Route::group(['prefix' => 'races'], function() {
    Route::get('/', 'RaceController@index');
    Route::get('create', 'RaceController@create');
    Route::post('create/save', 'RaceController@createSave');
    Route::get('{id}', 'RaceController@show');
    Route::get('{id}/edit', 'RaceController@edit');
    Route::post('{id}/edit/save', 'RaceController@editSave');
    Route::post('{id}/delete', 'RaceController@delete');
});

Route::group(['prefix' => 'professions'], function() {
    Route::get('/', 'ProfessionController@index');
    Route::get('create', 'ProfessionController@create');
    Route::post('create/save', 'ProfessionController@createSave');
    Route::get('{id}', 'ProfessionController@show');
    Route::get('{id}/edit', 'ProfessionController@edit');
    Route::post('{id}/edit/save', 'ProfessionController@editSave');
    Route::post('{id}/delete', 'ProfessionController@delete');
});