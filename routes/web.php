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
    return view('firstpage');
});

Route::get('/autho', function () {
    return view('authform');
});

Route::get('/regi', function () {
    return view('registerform');
});

Route::post('/register', 'RegOrAuthController@register');

Route::post('/authorization', 'RegOrAuthController@auth');

Route::post('/sendmail', 'UserController@sendMail');

Route::get('/viewmails/{id}', 'AdminController@lookMessages');

Route::get('/appointAs/{id}', 'AdminController@appointAs');

Route::post('/uploadPicture/', 'UserController@uploadPicture');