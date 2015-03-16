<?php

class Conversation extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Conversation';

    public static function newConversation($course, array $users)
    {
        $conversation = new Conversation;
        if (!is_numeric($course)) {
            $course = $course->id;
        }
        $conversation->Course = $course;
        $conversation->save();
        foreach ($users as $user) {
            $conversation->addUser($user);
        }
        return $conversation;
    }

    public function addMessage($user, $text)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        $correspondence = new Correspondence;
        $correspondence->Sender = $user;
        $correspondence->message = $text;
        $this->correspondence()->save($correspondence);
    }

    public function addUser($user)
    {
        $this->participants()->attach($user);
    }

    public function participants()
    {
        return $this->belongsToMany('User', 'Conversation_User', 'Conversation', 'User')
            ->withTimestamps();
    }

    public function course()
    {
        return $this->hasOne('Course', 'Course');
    }

    public function correspondence()
    {
        return $this->hasMany('Correspondence', 'Conversation');
    }

    public function scopeBetween($query, array $users)
    {
        return $query->whereHas('participants', function ($query) use ($users) {
            $query->whereIn('id', $users);
        })->orderBy('updated_at')->with('correspondence','participants');
    }

    public function scopeWithUser($query, $user)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        return $query->whereHas('participants', function ($query) use ($user) {
            $query->where('id', '=', $user);
        })->orderBy('updated_at')->with('correspondence','participants');
    }

    public function scopeWithUserOnCourse($query, $user, $course)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        if (!is_numeric($course)) {
            $course = $course->id;
        }
        return $query->whereHas('participants', function ($query) use ($user) {
            $query->where('id', '=', $user);
        })->orderBy('updated_at')->
        where('Course', '=', $course)->orderBy('created_at')
            ->with('correspondence','participants');
    }
}
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 16/03/2015
 * Time: 18:53
 */ 