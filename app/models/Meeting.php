<?php

class Meeting extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Meeting';

    protected $appends = array('timeLeft', 'status');

    public function scopeWithStudent($query, $user, $course)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        if (!is_numeric($course)) {
            $course = $course->id;
        }
        return $query->where('Student', '=', $user)
            ->where('Course', '=', $course);
    }

    public function scopeSort($query)
    {
        return $query->orderBy('time', 'DESC');
    }

    public function scopeWithStaff($query, $user)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        return $query->where('Staff', '=', $user);
    }

    public function scopeCourse($query, $course)
    {
        if (!is_numeric($course)) {
            $course = $course->id;
        }
        return $query->where('Course', '=', $course);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('time', '>', new DateTime());
    }

    public function scopePast($query)
    {
        return $query->where('time', '<', new DateTime());
    }

    public function scopeHeld($query, $held)
    {
        return $query->where('held', '=', $held);
    }

    public function scopeAccepted($query, $student, $staff)
    {
        return $query->where('accepted_staff', '=', $staff)
            ->where('accepted_student', '=', $student);
    }

    public function course()
    {
        return $this->hasOne('Course', 'Course');
    }

    public function student()
    {
        return $this->hasOne('Student', 'User');
    }

    public function staff()
    {
        return $this->hasOne('Staff', 'User');
    }

    public function accept($user)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        $student = $this->Student;
        if (!is_numeric($this->Student)) {
            $student = $student->id;
        }
        if ($student == $user) {
            $this->accepted_student = true;
            return;
        }
        $this->accepted_staff = true;
    }

    public function otherMember($user)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        $student = $this->Student;
        if (!is_numeric($this->Student)) {
            $student = $student->id;
        }
        if ($student == $user) {
            return User::find($student);
        }
        return User::find($this->Staff);
    }

    public function isAccepted($user)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        $student = $this->Student;
        if (!is_numeric($this->Student)) {
            $student = $student->id;
        }
        if ($student == $user) {
            return $this->accepted_student;
        }
        return $this->accepted_staff;
    }

    public function isAcceptedOther($user)
    {
        if (!is_numeric($user)) {
            $user = $user->id;
        }
        $student = $this->Student;
        if (!is_numeric($this->Student)) {
            $student = $student->id;
        }
        if ($student == $user) {
            return $this->accepted_staff;
        }
        return $this->accepted_student;
    }

    public function getTimeLeftAttribute()
    {
        $now = time();
        $time = strtotime($this->time) - $now;
        if ($time > 60 && $time < 3600)
            return ($time / 60) . "minutes remaining";
        else if ($time > 3600 && $time < 86400) return intval($time / 3600) . ' hours';
        else if ($time > 86400 && $time < 604800) return intval($time / 86400) . ' days';
        else if ($time > 604800 && $time < 18144000) return intval($time / 604800) . ' weeks';
        else if ($time > 18144000 && $time < 217728000) return intval($time / 18144000) . ' months';
        else return intval($time / 217728000) . ' years';
    }

    public function getStatusAttribute()
    {
        if ($this->held) {
            return "Meeting was held.";
        } else if ($this->accepted_staff && !$this->accepted_student) {
            return "Awaiting student approval.";
        } else if (!$this->accepted_staff && $this->accepted_student) {
            return "Awaiting staff approval.";
        } else {
            return "Meeting will take place in: " . $this->getTimeLeftAttribute();
        }
    }


}