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

Route::get('/admin/questions/{id}', 'FormQuestionController@one');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/admin', 'FormQuestionController@all');

Route::post('/store', 'FormQuestionController@store');

Route::post('/admin/questions/{id}/delete', 'FormQuestionController@delete');

Route::post('/admin/questions/{id}/addanswer', 'FormQuestionController@addAnswer');

Route::get('/admin/files/download', 'FormFileController@download');

Auth::routes();
