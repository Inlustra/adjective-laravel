<?php

class Student extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Student';

    public function user() {
        return $this->belongsTo('User','User');
    }

    public function courses() {
        return $this->belongsToMany('Course', 'Student_Course', 'Student', 'Course');
    }
}
