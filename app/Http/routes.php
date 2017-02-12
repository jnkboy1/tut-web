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
use codetech\Article;


Route::get('/', function () {

    if(is_logged_in())
    {
        $articles = Article::all(); 
        return view('welcome',compact(['articles',$articles]));
    }
    else{
        return redirect('/login');
    }
    
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

Route::post('/status/create','StatusController@create')->name('create_status');
Route::get('/status/{id}/destroy','StatusController@destroy')->name('destroy_status');
Route::get('/status/{id}/like','StatusController@like')->name('like_status');
Route::get('/likes/{id}/unlike','StatusController@unlike')->name('unlike_status');


/*
| for articles
|
|
|
*/

Route::resource('articles',
'ArticleController');


/* for tutorials */
Route::get('tutorials','TutorialController@index');
Route::get('tutorial/{tag}','TutorialController@show');


/* for codex */
Route::get('codex','CodexController@index');
Route::get('codex/result', 'CodexController@result');