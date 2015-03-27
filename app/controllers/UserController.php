<?php

class UserController extends \BaseController {

	public function getDashboard()
	{
		$users = User::all();
		
		return View::make('index', ['users' => $users]);
		
	}
	
	public function getFullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}
	
	public function edit($id)
	{
		$user = User::find($id);
		return View:make('user.edit', [ 'user' => $user ]);
	}
	
	public function update($id)
	{
		$user = User::find($id);
		
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		
		$user->save();
		
		return Redirect::to('/home');
	}
}