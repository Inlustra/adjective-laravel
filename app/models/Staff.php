<?php


class Staff extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Staff';
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('User', 'User_Staff', 'Staff', 'User')->withTimestamps();;
    }


}
