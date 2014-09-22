<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('samp');
	}
        public function index()
	{
		return View::make('master');
	}
    public function layout()
    {
            return View::make('layout');

    }
        public function login()
	{
		return View::make('login');
	}
    public function post()
    {
    	 $input = input::all();
    	 $rules = array('username'=>'required','username'=>'required');
    	 $v = validater::make($input,$rules);
    	 $if($v->fails())
    	 {
    	 	return redirect::to(login)->withErrors($v)
    	 }
    	 else
    	 {
    	 	$data = array('username'=>$input['username'],'password'=>$input['password']);
    	 	if(Auth::attempt($data))
    	 	{
    	 		return Redirect::to('data');
    	 	}
    	 	else
    	 	{
    	 		return Redirect::to('register')->withInput()->withErrors($v);

    	 	}
    	 }
    	 public function logout()
    	 {
    	 	Auth::logout();
    	 	return Redirect::to('/');
    	 }
    }	
