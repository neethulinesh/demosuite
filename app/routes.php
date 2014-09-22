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
Route::get('dashboard', array(
    'as'=>'post-add-get',
    'uses'=>'UserController@getlogin'
    )
);
Route::post('login', array(
    'as'=>'post-add-get',
    'uses'=>'UserController@postlogin'
    )
);
// Route::get('/',array('uses' => 'HomeController@index'));
//Route::get('/', 'HomeController@showWelcome');
//Route::get('/', array('uses' => 'HomeController', function () { }));
// Route::get('login', array ('uses'=>'HomeController@login'));
// Route::post('login', function () { });
// //Route::get('authors', array('uses'=>'AuthorsController@index'));
// Route::get('AuthorsController', array ('uses'=>'AuthorsController@indexd'));
// Route::get('data', array ('uses'=>'AuthorsController@database'));



// Route::post('valid', function()
// {
//         /* Get the login form data using the 'Input' class */
//         $userdata = array(
//             'username' => Input::get('username'),
//             'passward' => Input::get('passward')
//         );
 
//         /* Try to authenticate the credentials */
//         if(Auth::attempt($userdata)) 
//         {
//             // we are now logged in, go to admin
//             return Redirect::to('master');
//         }
//         else
//         {
//             return Redirect::to('login');
//         }
// });
// Route::get('login', array('as' => 'login', function () { 
// return View::make('login');
// }))->before('guest');

// Route::filter('guest', function()
// {
//         if (Auth::check()) 
//                 return Redirect::route('HomeController')
//                         ->with('flash_notice', 'You are already logged in!');
// });


// Route::get('logout', array('as' => 'logout', function () { 
// return View::make('logout');
// }))->before('auth');

// Route::get('profile', array('as' => 'profile', function () { }))->before('auth');



// Route::filter('auth', function()
// {
//         if (Auth::guest())
//                 return Redirect::route('login')
//                         ->with('flash_error', 'You must be logged in to view this page!');
// });

// Route::get('register', function(){

// return View::make('register');

// });
// Route::post('register_action', function()
// {
//         $obj = new RegisterController() ;
//         return $obj->samp();
// });





