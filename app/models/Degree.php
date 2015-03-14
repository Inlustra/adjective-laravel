<?php

class Degree extends Eloquent{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Degree';
    public $timestamps = false;

    public function director() {
        return $this->belongsTo('User', 'Director');
    }

    public function students() {
        return $this->hasMany('Student','Degree');
    }


}
