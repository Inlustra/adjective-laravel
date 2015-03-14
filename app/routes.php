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
    return View::make('index');
});
Route::get('users/students', function () {
    return User::students()->get();
});

Route::get('users/students/course/{type}', function ($type) {
    if(!is_numeric($type)) {
        return User::studentsOnCourseLike($type)->get();
    }
    return User::studentsOnCourse($type)->get();
});

Route::get('users/students/degree/{type}', function ($type) {
    if(!is_numeric($type)) {
        echo "cacssca";
        return User::studentsOnDegreeLike($type)->get();
    }
    return User::studentsOnDegree($type)->get();
});

Route::get('users/', function() {
    $users = User::all();
    return $users;
});

Route::get('users/staff', function () {
    $students = User::staff()->get();
    return $students;
});

Route::get('users/staff/{type}', function ($type) {
    if(is_numeric($type)) {
        return User::staffOfType($type)->get();
    }
    $students = User::staffLike($type)->get();
    return $students;
});

