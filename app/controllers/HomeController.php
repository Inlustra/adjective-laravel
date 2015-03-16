<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('login.index');
	}
	
	public function postIndex()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		
		if (Auth::attempt(['username' => $username, 'password' => $password]))
		{
			return Redirect::intended('/');
		}
		
		return Redirect::back()
			->withInput()
			->withErrors('Something went wrong.');
		}
		
	public function getLogin()
	{
		return Redirect::to('/');
	}
	
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
		
		
		
		}
	}

}
