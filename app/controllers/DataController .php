<?php
class DataController extends BaseController{

	//get action for the add
	public function getAdd(){
		return View::make('login')->with('message','Thanks for registering!!');
	}

	public function show(){
		return View::make('hello');
	}
}