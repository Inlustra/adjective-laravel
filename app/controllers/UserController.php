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
 
        return View::make('user.edit', [ 'user' => $user ]);
    }
	
}