<?php

class Course extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Course';

    protected $hidden = array('pivot');

    public function deadlines()
    {
        return $this->hasMany('Deadline', 'Course');
    }

    public function students()
    {
        return $this->belongsToMany('Student', 'Student_Course', 'Course', 'Student')
            ->withPivot('Supervisor as Supervisor', 'SecondMarker as SecondMarker');
    }

    public function staff()
    {
        return $this->belongsToMany('User', 'Staff_Course', 'Course', 'User')->withPivot('role as Role');
    }


}
