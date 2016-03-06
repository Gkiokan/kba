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

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::get('/admin', function(){ echo "Admin Area"; });
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
    Route::match(['get', 'post'], '/myBusiness', ['uses'=> 'Backend@myBusiness', 'as'=>'myBusiness']);
    Route::get('/myLocation', ['uses'=> 'Backend@myLocation', 'as'=>'myLocation']);


    // Prototyping
    Route::get('magic', function(){
          $users = \App\User::all();

          echo "<pre>";
          foreach($users as $user):
              echo "$user->name <br>";
              foreach($user->business as $business):
                    echo "Store: $business->name $business->email $business->tel";
                    echo "<br>";
              endforeach;
              echo "<hr>";
          endforeach;
    });

    // Create some Dummy data.
    Route::get('magic/create', function(){
          \App\Business::firstOrCreate(array(
              'user_id'=>1, 'name'=> 'iDH Magic',
              'adress'=>'Magic Street 24', 'plz'=>80939, 'city'=>'Munich',
              'tel'=>'666 6666 666', 'fax'=>'111 998', 'mobil'=>'1987 9983',
              'email'=>'support@magic.com', 'info_email'=>'info@magic.com'
          ));

          echo "some magic should been happpen";
    });
});
