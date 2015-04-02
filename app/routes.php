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

Route::get('/meeting', function() {
	return View::make('meeting');
});

Route::get('/something', function () {
	return View::make('something');
});

Route::get('/travel', function () {
	return View::make('travel');
});

Route::get('/bulkall', function () {
	return View::make('bulk');
});

Route::get('/courses', function() {
	return View::make('course');
});

Route::get('/api/users/staff', function () {
    $type = Input::get('query');
    return User::named($type)->orderBy('lastname')->get();
});

Route::get('/api/users/{id}', function ($id) {
    return User::find($id);
});

Route::post('/communications/', ['as' => 'comm.reply', 'before' => 'auth', 'uses' => 'CommunicationController@reply']);

Route::get('/communications/', ['as' => 'comm', 'before' => 'auth', 'uses' => 'CommunicationController@index']);

Route::get('/user/', ['as' => 'user', 'before' => 'auth', 'uses' => 'UserController@show']);

Route::get('/student/{id}', ['as' => 'admin.students.one', 'before' => 'auth|admin', 'uses' => 'UserController@student']);
Route::get('/student/', ['as' => 'admin.students.list', 'before' => 'auth|admin', 'uses' => 'UserController@students']);

Route::get('/admin/course/{id}/data', ['as' => 'admin.course.data', 'before' => 'auth|admin.course', 'uses' => 'CourseController@get']);
Route::get('/admin/course/{id}/students', ['as' => 'admin.course.students', 'before' => 'auth|admin.course', 'uses' => 'CourseController@students']);
Route::get('/admin/course/{id}/staff', ['as' => 'admin.course.staff', 'before' => 'auth|admin.course', 'uses' => 'CourseController@staff']);

Route::get('/admin/course/{id}', ['as' => 'admin.course', 'before' => 'auth|admin.course', 'uses' => 'CourseController@admin']);
Route::get('/admin/course/new', ['as' => 'admin.course.new', 'before' => 'auth', 'uses' => 'CourseController@new']);

Route::get('/course/{id}', ['as' => 'student.course', 'before' => 'auth|student.course', 'uses' => 'CourseController@show']);
Route::get('/user', ['as' => 'user.dashboard', 'before' => 'auth', 'uses' => 'UserController@getDashboard']);

Route::get('/admin/course/{id}/students/edit', ['as' => 'admin.course.editstudents', 'before' => 'auth|admin.course', 'uses' => 'CourseController@editStudents']);
Route::get('/admin/course/{id}/students/bulk', ['as' => 'admin.course.bulk', 'before' => 'auth|admin.course', 'uses' => 'CourseController@bulk']);

Route::controller('/', 'HomeController');
