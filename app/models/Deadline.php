<?php
class Deadline extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deadline';

    public function course()
    {
        return $this->belongsTo('Course', 'Course');
    }


}