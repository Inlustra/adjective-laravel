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
        $users = User::find($id);
 
        return View::make('user.edit', [ 'users' => $users ]);
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