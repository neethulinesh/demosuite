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

Route::resource('doctor','DoctorController');

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
    'as'=>'post-addget',
    'uses'=>'UserController@postlogin'
    )
);
// Route::get('dashboard',array(
//     'as'=>'DoctorController',function(){
//         return View::make('dashboard');
//     }));
// Route::get('dashboard',array(
//         'as'=>'post-add',
//             'uses'=>'DoctorController@index'
//     ));
// Route::get('create',array(
//         'as'=>'post-create',
//             'uses'=>'DoctorController@create'
//     ));
// Route::post('create',array(
//         'as'=>'post-create',
//             'uses'=>'DoctorController@create'
//     ));
// Route::get('store',array(
//         'as'=>'post-store',
//             'uses'=>'DoctorController@store'
//     ));
// Route::post('store',array(
//         'as'=>'post-store',
//             'uses'=>'DoctorController@store'
//     ));
// Route::get('update',array(
//         'as'=>'post-update',
//             'uses'=>'DoctorController@update'
//     ));
// Route::post('update',array(
//         'as'=>'post-update',
//             'uses'=>'DoctorController@update'
//     ));
// Route::get('dashboard', array(
//     'as'=>'post-add',
//     function(){
//         return View::make('dashboard');
//     }
    
// ));








