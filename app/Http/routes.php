<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();


    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index');

    //
    Route::get('/myProfile', ['uses'=> 'Backend@myProfile', 'as'=>'myProfile']);
    Route::get('/myService', ['uses'=> 'Backend@myService', 'as'=>'myService']);
    Route::get('/myCalendar', ['uses'=> 'Backend@myCalendar', 'as'=>'myCalendar']);
    Route::get('/myBusiness', ['uses'=> 'Backend@myBusiness', 'as'=>'myBusiness']);
    Route::get('/myLocation', ['uses'=> 'Backend@myLocation', 'as'=>'myLocation']);
});
