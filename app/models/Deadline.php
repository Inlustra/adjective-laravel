<?php
class Deadline extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Deadline';

    public function course()
    {
        return $this->belongsTo('Course', 'Course');
    }


}