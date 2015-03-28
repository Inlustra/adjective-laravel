<?php

class UserController extends \BaseController {

	public function getDashboard()
	{
		$users = User::all();
		
		return View::make('index', ['users' => $users]);
		
	}
}