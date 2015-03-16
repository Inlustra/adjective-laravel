<?php

class Correspondence extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Correspondence';
    protected $touches = array('conversation');
    protected $hidden = array('Conversation');

    public function conversation()
    {
        return $this->belongsTo('Conversation', 'Conversation');
    }

    public function from()
    {
        return $this->hasOne('User', 'Sender');
    }

}