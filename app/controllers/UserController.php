<?php
class UserController extends BaseController
{
	public function getlogin()
	{
		return View::make('login');
	}
	public function postlogin()
	{
		$validator = Validator::make(Input::all(),array(
			'email'=> 'email|required',
				'password'   => 'required'
			));
		// if($validator->fails())
		// {
		// 	//show errors
		// 	return Redirect::route('UserController')->withErrors($validator)->withInput();
		// }
		// else
		{
			$userdata=array('email'=>Input::get('email'), 'password'=>Input::get('password'));
		}
		 if (Auth::attempt($userdata) )
		{
		          return Redirect::route('post-add')->with('message', 'You are now logged in!');	    
		}
		 else 
		 {
   				 
   				 
   				 return Redirect::to('login');


		}
	}
}