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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/store', 'FormQuestionController@store');

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {

        Route::get('', 'FormQuestionController@all');

        Route::get('/questions/{id}', 'FormQuestionController@one');

        Route::get('/settings', 'SettingsController@get');

        Route::post('/settings', 'SettingsController@set');

        Route::post('/questions/{id}/delete', 'FormQuestionController@delete');

        Route::post('/questions/{id}/addanswer', 'FormQuestionController@addAnswer');
        
        Route::get('/files/download', 'FormFileController@download');

    });

});

Auth::routes();
