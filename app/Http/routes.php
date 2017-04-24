<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|Route::get('/', function () {
    return view('welcome');
});
*/



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

Route::get('/', function() {
    return View::make('index'); 
});


// API ROUTES ==================================  
Route::group(array('prefix' => '/api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));
    Route::resource('todos', 'TodosController', 
        array('only' => array('index', 'store', 'update','destroy')));
    Route::resource('locations', 'LocationController', 
        array('only' => array('index', 'store', 'destroy')));
    
  	Route::post('/login', 'LoginController@login');

  	Route::get('/customer-manager'	, 'CustomerController@manager');
  	Route::get('/customer-customer'	, 'CustomerController@customer');
  	Route::get('/customer-user'		, 'CustomerController@user');

  	Route::get('/device-manager'	, 'DeviceController@manager');
  	Route::get('/device-customer'	, 'DeviceController@customer');
  	Route::get('/device-user'		, 'DeviceController@user');

  	Route::get('/service-manager'	, 'ServiceController@manager');
  	Route::get('/service-customer'	, 'ServiceController@customer');
  	Route::get('/service-user'		, 'ServiceController@user');
});
