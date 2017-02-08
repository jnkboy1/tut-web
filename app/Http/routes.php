<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use codetech\Status;


Route::get('/', function () {
    $status = Status::all();
    $user = Auth::user();
    $data = array(
        'status' => $status,
        'user' => $user,
    );
    return view('welcome')->with($data);
});

Route::get('/welcome',function(){
    return "Welcome";
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
| for status
| create
|
|
*/

// Route::post('/status/create','StatusController@create')->name('create_status');
// Route::get('/status/{id}/like','StatusController@like')->name('like_status');
// Route::get('/likes/{id}/unlike','StatusController@unlike')->name('unlike_status');

