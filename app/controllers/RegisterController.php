<?php
class RegisterController extends \BaseController{

	//get action for the add
	public function getAdd(){
		return View::make('home');
	}

	//post action for the add
	public function postAdd(){
		//make the validator
		$validator = Validator::make(Input::all(),array(
				 'fname'       => 'required|min:3',
				 'lname'       => 'required|min:3',
				'email' 		=> 'email|required|unique:user',
				'password'   => 'required|min:6|same:cpassword',
				'cpassword'  => 'required|min:6'
			)
		);

		if($validator->fails()){
			//show errors
			return Redirect::route('RegisterController')->withErrors($validator)->withInput();
		}else{
			//insert a record
			$fname = Input::get('fname');
			$lname = Input::get('lname');
			$email = Input::get('email');
			$password = Input::get('password');
			$cpassword = Input::get('cpassword');

			//create a post object and save data
			$post = new Register;
			$post->fname= $fname;
			$post->lname= $lname;
			$post->email = $email;
			$post->password =Hash::make($password);
			$post->cpassword = $cpassword;

			$post->save();
			//return View::make('lo');
			 //return Redirect::route('post-add-get');
			//->with('global','Saved Successfully!');
		  return Redirect::route('UserController')->with('message','Thanks for registering');
		}
	}
}	