<?php

class Course extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'course';

    public function director()
    {
        return $this->belongsTo('User', 'Director');
    }

    public function deadlines() {
        return $this->hasMany('Deadline','Course');
    }


}
