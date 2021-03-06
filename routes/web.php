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
    if (Auth::check())
        return redirect('/user');
    return view('firstpage');
});

Route::get('/autho', function () {
    return view('authform');
});

/*Route::get('/regi', function () {
    return view('registerform');
});*/

/*Route::post('/register', 'RegOrAuthController@register');*/

Route::post('/authorization', 'RegOrAuthController@auth');

Route::post('/sendMail', 'UserController@sendMail');

Route::get('/user', function (){
   return view('userview');
});

Route::get('/viewmails/{id}', 'AdminController@lookMessages');

Route::get('/appointAs/{id}', 'AdminController@appointAs');

Route::post('/uploadPicture/', 'UserController@uploadPicture');

Route::get('/admin', function (){
    $users = App\User::all();
    return view('workingview', ['users' => $users]);
})->middleware('admin');

Route::get('/signout', function (){
   Auth::logout();
   return redirect('/');
});

Route::get('/sideTasks', function (){
    return view('sidetask');
});

Route::post('/sideTask1', 'SideTaskController@firstSideTaskBlock1');
