<?php

class Adjective extends \BaseController
{

    private static $SESSION_VAR = 'emu-user';

    public static function imitate($user)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        Session::put(self::$SESSION_VAR, $user);
        return Redirect::route('user');
    }

    public static function stopImitation()
    {
        Session::forget(self::$SESSION_VAR);
        return Redirect::route('user');
    }

    public static function isImitating() {
        return Session::has(self::$SESSION_VAR);
    }

    public static function user()
    {
        if (Session::has(self::$SESSION_VAR)) {
            return User::find(Session::get(self::$SESSION_VAR));
        }
        return Auth::user();
    }
}