<?php

class UserController extends \BaseController {

	public function getDashboard()
	{
		$users = User::all();
		
		return View::make('index', ['users' => $users]);
		
	}
	
	public function editProfile()
	{
		$users = User:all();
		
		return View::make('editprofile', ['users' => $users]);
	}
	
	public function getFullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}
	
    }
	
	public function update($id)
	{
		$user = User::find($id);
		
		$users->firstname = Input::get('firstname');
		$users->lastname = Input::get('lastname');
		$users->username = Input::get('username');
		$users->email = Input::get('email');
		$users->password = Hash::make(Input::get('password'));
		
		$users->save();
		
		return Redirect::to('/user');
	}
}