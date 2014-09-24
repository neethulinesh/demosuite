<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'HomeController', function () {
    return View::make('master');
}));
Route::get('register', array('as' => 'RegisterController', function () {
    return View::make('register');
}));
Route::get('home', array(
    'as'=>'post-add-get',
    'uses'=>'RegisterController@getAdd'
    )
);

Route::post('register', array(
    'as'=>'postadd',
    'uses'=>'RegisterController@postAdd'
    )
);
Route::get('login', array('as' => 'UserController', function () {
    return View::make('login');
}));

Route::post('login', array(
    'as'=>'post-add-get',
    'uses'=>'UserController@postlogin'
    )
);
Route::get('dashboard', array(
    'as'=>'post-add',
    function(){
        return View::make('dashboard');
    }
    
));







