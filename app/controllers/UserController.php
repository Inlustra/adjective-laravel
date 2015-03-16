<?php

class UserController extends \BaseController {
	
	public function __construct()
	{
		$this->beforeFilter('auth');
	}
	
	public function index()
	{
		$users = User::all();
		
		return View::make('index', ['users' => $users]);
		
	}
}