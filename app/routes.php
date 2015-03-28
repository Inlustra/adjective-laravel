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

Route::group(array('domain' => 'api.adjective.xyz'), function () {

    Route::get('team', function () {
        $user = User::take(10)->get();
        return $user;
    });
    
    Route::get('/', function () {
        return View::make('apiScaffold');
    });

    Route::get('users/students', function () {
        return User::students()->get();
    });

    Route::get('users/students/course/{type}', function ($type) {
        if (!is_numeric($type)) {
            return User::studentsOnCourseLike($type)->get();
        }
        return User::studentsOnCourse($type)->get();
    });

    Route::get('users/students/degree/{type}', function ($type) {
        if (!is_numeric($type)) {
            return User::studentsOnDegreeLike($type)->get();
        }
        return User::studentsOnDegree($type)->get();
    });

    Route::get('users/', function () {
        return User::all();
    });

    Route::get('users/staff', function () {
        return User::staff()->get();
    });

    Route::get('users/staff/{type}', function ($type) {
        if (is_numeric($type)) {
            return User::staffOfType($type)->get();
        }
        return User::staffLike($type)->get();
    });

    Route::get('users/{name}', function ($name) {
        return User::named($name)->get();
    });
    Route::get('users/{name}/conversation', function ($name) {
        return Conversation::withUser(User::named($name)->get()->first())->get();
    });
});

Route::get('/', function () {
    return View::make('login.index');
});

Route::get('/editprofile', function () {
	return View::make('editprofile');
});

Route::get('/viewuploads', function () {
	return View::make('viewuploads');
});

Route::get('/announcements', function () {
	return View::make('announ');
});

Route::get('/communications', function () {
	return View::make('comm');
});

Route::get('/something', function () {
	return View::make('something');
});

Route::get('/travel', function () {
	return View::make('travel');
});

Route::get('/viewcourses', function () {
	return View::make('viewcourses');
});

Route::get('/viewstudents', function () {
	return View::make('viewstudents');
});

Route::get('/courses', function() {
	return View::make('courses');
}

Route::get('/user', ['as' => 'user.dashboard', 'before' => 'auth', 'uses' => 'UserController@getDashboard']);
Route::controller('/', 'HomeController');
