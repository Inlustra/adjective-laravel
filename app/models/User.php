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

    public function scopeStaffMembers($query)
    {
        return $query->has('staffRoles');
    }

    public function scopeStudents($query)
    {
        return $query->has('student');
    }

    public function scopeStudentsOnCourse($query, $course)
    {
        return $query->whereHas('student', function ($query) use ($course) {
            $query->whereHas('courses', function ($query) use ($course) {
                $query->where('id', '=', $course->id);
            });
        });
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

}
