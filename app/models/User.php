<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'User';

    public function staffRoles()
    {
        return $this->belongsToMany('Staff', 'User_Staff', 'User', 'Staff')->withTimestamps();;
    }

    public function student()
    {
        return $this->hasOne('Student', 'User');
    }

    public function scopeStaff($query)
    {
        return $query->has('staffRoles')->with(array('staff'));
    }

    public function scopeStaffLike($query, $type)
    {
        return $query->whereHas('staffRoles', function ($query) use ($type) {
            $query->where('role', 'LIKE', $type);
        })->with(array('staff'));
    }

    public function scopeStaffOfType($query, $type)
    {
        if (!is_numeric($type)) {
            $type = $type->id;
        }
        return $query->whereHas('staffRoles', function ($query) use ($type) {
            $query->where('id', '=', $type);
        })->with(array('staff'));
    }

    public function scopeStudents($query)
    {
        return $query->has('student')->with(array('student', 'student.degree', 'student.courses'));
    }

    public function scopeStudentsOnCourse($query, $course)
    {
        if (!is_numeric($course)) {
            $course = $course->id;
        }
        return $query->whereHas('student', function ($query) use ($course) {
            $query->whereHas('courses', function ($query) use ($course) {
                $query->where('id', '=', $course);
            });
        })->with(array('student', 'student.degree', 'student.courses'));
    }

    public function scopeStudentsOnDegree($query, $degree)
    {

        if (!is_numeric($degree)) {
            $degree = $degree->id;
        }
        return $query->whereHas('student', function ($query) use ($degree) {
            $query->whereHas('degree', function ($query) use ($degree) {
                $query->where('id', '=', $degree);
            });
        })->with(array('student', 'student.degree', 'student.courses'));;
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

}
