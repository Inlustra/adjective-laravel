<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('login.index');
});

Route::get('api/users/students', function () {
    return User::students()->get();
});

Route::get('api/users/students/course/{type}', function ($type) {
    if(!is_numeric($type)) {
        return User::studentsOnCourseLike($type)->get();
    }
    return User::studentsOnCourse($type)->get();
});

Route::get('api/users/students/degree/{type}', function ($type) {
    if(!is_numeric($type)) {
        return User::studentsOnDegreeLike($type)->get();
    }
    return User::studentsOnDegree($type)->get();
});

Route::get('api/users/', function() {
    return User::all();
});

Route::get('api/users/staff', function () {
    return User::staff()->get();
});

Route::get('api/users/staff/{type}', function ($type) {
    if(is_numeric($type)) {
        return User::staffOfType($type)->get();
    }
    return User::staffLike($type)->get();
});

Route::get('api/users/{name}', function($name) {
    return User::named($name)->get();
});


Route::resource('/user', 'UserController');
Route::controller('/', 'HomeController');