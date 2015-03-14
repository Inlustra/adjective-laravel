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
    $students = User::students()->get();
    return $students;
});

Route::get('users/students/course/{id}', function ($id) {
    $students = User::studentsOnCourse($id)->get();
    return $students;
});

Route::get('users/students/degree/{id}', function ($id) {
    $students = User::studentsOnDegree($id)->get();
    return $students;
});

Route::get('users/', function() {
    $users = User::all();
    return $users;
});

Route::get('users/staff', function () {
    $students = User::staff()->get();
    return $students;
});
