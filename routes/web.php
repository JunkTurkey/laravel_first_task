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

Route::get('/regi', view('registerform'));

Route::get('/autho', view('authform'));

Route::post('/register', 'RegOrAuthController@register');

Route::post('/authorization', 'RegOrAuthController@auth');

Route::post('/sendmail', 'UserController@sendMail');

