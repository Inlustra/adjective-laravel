<?php

class Deadline extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Deadline';

    protected $appends = array('timeLeft');

    public function course()
    {
        return $this->belongsTo('Course', 'Course');
    }

    public function submissions()
    {
        return $this->belongsToMany('File', 'Deadline_Submissions', 'Deadline', 'File')
            ->withTimestamps();
    }

    public function files()
    {
        return $this->belongsToMany('File', 'Deadline_Files', 'Deadline', 'File')
            ->withTimestamps();
    }

    public function getTimeLeftAttribute()
    {
        $now = time();
        $time = strtotime($this->date)-$now;
        if ($time > 60 && $time < 3600)
            return ($time / 60) . "minutes remaining";
        else if ($time > 3600 && $time < 86400) return intval($time / 3600) . ' hours remaining';
        else if ($time > 86400 && $time < 604800) return intval($time / 86400) . ' days remaining';
        else if ($time > 604800 && $time < 18144000) return intval($time / 604800) . ' weeks remaining';
        else if ($time > 18144000 && $time < 217728000) return intval($time / 18144000) . ' months remaining';
        else return intval($time / 217728000) . ' years remaining';
    }


}