<?php

class UserController extends \BaseController
{

    public function getDashboard()
    {
        $users = User::all();

        return View::make('index', ['users' => $users]);

    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function edit($id)
    {
        $user = User::find($id);

        return View::make('user.edit', ['user' => $user]);
    }

    public function students()
    {
        $users = User::students()->get();

        return View::make('viewstudents', ['students' => $users]);
    }

    public function student($id)
    {
        return View::make('user.edit', ['user' => User::find($id)->first()]);
    }

    public function postMeeting($id)
    {
        $action = Input::get("action") or "";
        $meeting = Meeting::find($id);
        $user = Adjective::user();
        $other = $meeting->otherMember($user);
        switch ($action) {
            case "Accept":
                $meeting->accept(Adjective::user());
                $meeting->save();
                Mail::send('emails.meetings.accepted', array('from' => $user, 'meeting' => $meeting),
                    function ($message) use ($other, $user) {
                        $message->to($other->email, $other->fullName)
                            ->subject($user->fullName . " accepted your meeting.");
                    });
                break;
            case "Cancel":
                $meeting->delete();
                Mail::send('emails.meetings.cancelled', array('from' => $user, 'meeting' => $meeting),
                    function ($message) use ($other, $user) {
                        $message->to($other->email, $other->fullName)
                            ->subject($user->fullName . " cancelled your meeting.");
                    });
                break;
        }
        return Redirect::back();
    }

}