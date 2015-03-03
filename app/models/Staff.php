<?php


class Staff extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'staff';

    public function users()
    {
        return $this->belongsToMany('User', 'user_staff', 'Staff', 'User');
    }


}
