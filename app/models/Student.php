<?php

class Student extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Student';
    protected $hidden = array('id', 'User', 'Degree');
    public function user() {
        return $this->belongsTo('User','User');
    }

    public function degree()
    {
        return $this->belongsTo('Degree', 'Degree');
    }

    public function courses() {
        return $this->belongsToMany('Course', 'Student_Course', 'Student', 'Course')
            ->withPivot('Supervisor as Supervisor', 'SecondMarker as SecondMarker');
    }
}
