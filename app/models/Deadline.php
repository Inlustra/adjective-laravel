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
        $time = strtotime($this->date) - $now;
        $pre = " Due in ";
        $post = "";
        if ($time < 0) {
            $time = abs($time);
            $post = " ago";
            $pre = "Deadline past ";
        }
        if ($time > 60 && $time < 3600) return $pre . ($time / 60) . "minutes" . $post;
        else if ($time > 3600 && $time < 86400) return $pre.intval($time / 3600) . ' hours' . $post;
        else if ($time > 86400 && $time < 604800) return $pre.intval($time / 86400) . ' days' . $post;
        else if ($time > 604800 && $time < 18144000) return $pre.intval($time / 604800) . ' weeks' . $post;
        else if ($time > 18144000 && $time < 217728000) return $pre.intval($time / 18144000) . ' months' . $post;
        else return $pre.intval($time / 217728000) . ' years' . $post;
    }


}