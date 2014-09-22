<?php
class UserController extends BaseController{
	public function getlogin()
	{
		return View::make('login');
	}
	public function postlogin()
	{
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) 
		{
			$uname = Input::get('uname');
			$pswd=Input::get('pswd');

			//create a post object and save data
			$post = new User;
			$post->uname= $uname;
			$post->pswd=$pswd;

			$post->save();
    return Redirect::to('dashboard')->with('message', 'You are now logged in!');
		}
		 else 
		 {
    return Redirect::to('login')
        ->with('message', 'Your username/password combination was incorrect')
        ->withInput();
		}
	// $validator = Validator::make(Input::all(),array(
	// 			 'uname'       => 'uname|required|unique:user',
	// 			'pswd'   => 'required|min:6',
			
	// 		)
	// 	);
	// if($validator->fails()){
	// 		//show errors
	// 		return Redirect::route('login')->withErrors($validator)->withInput();
	// 	}
		// else{
		// 	//insert a record
		// 	$uname = Input::get('uname');
		// 	$pswd=Input::get('pswd');

		// 	//create a post object and save data
		// 	$post = new User;
		// 	$post->uname= $uname;
		// 	$post->pswd=$pswd;

		// 	$post->save();
		// 	//return View::make('lo');
		// 	 //return Redirect::route('post-add-get');
		// 	//->with('global','Saved Successfully!');
		//  // return $this->getadd();
		// }
	}
}