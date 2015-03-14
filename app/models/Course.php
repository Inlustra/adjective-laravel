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

    public function director()
    {
        return $this->belongsTo('User', 'Director');
    }

    public function deadlines()
    {
        return $this->hasMany('Deadline', 'Course');
    }

    public function students()
    {
        return $this->belongsToMany('Student', 'Student_Course', 'Course', 'Student');
    }


}
