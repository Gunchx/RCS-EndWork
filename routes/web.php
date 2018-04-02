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
    return view('pages/index')->with(['page' => 'index']);
});

Route::get('/mystuff', function() {
    return view('pages/mystuff')->with(['page' => 'mystuff']);
});

Route::get('/pictures', function() {
    return view('pages/pictures')->with(['page' => 'pictures']);
});

Route::get('/chat', function() {
    return view('pages/chat')->with(['page' => 'chat']);
});

Route::get('/registration', function() {
    return view('pages/registration')->with(['page' => 'registration']);
});

Route::get('/about', function() {
    return view('pages/about')->with(['page' => 'about']);
});

Route::post('/registration', 'AccountController@storeUser');


    // Route::post('/registration', 'AccountController@storeUser');
    // $rule = [
    //     'username' => 'required',
    //     'firstName' => 'required',
    //     'password' => 'required|min:4|same:password2'
    // ];
    // $validation = $request->validate($rules);
    // dd($validation); 

Route::post('/chat/save-message','AccountController@saveChatMessage');
