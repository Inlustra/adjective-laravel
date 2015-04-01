<?php

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::find(1);

        $students = $course->students()->get();
        foreach ($students as $student) {
            $meeting = new Meeting;
            $meeting->Student = $student->id;
            $meeting->Staff = User::find($student->Supervisor)->id;
            $meeting->Course = $course->id;
            $date = new DateTime();
            $date->add(new DateInterval('P3D'));
            $meeting->time = $date;
            $meeting->agenda = "Meeting requested by supervisor";
            $meeting->accepted_staff = true;
            $meeting->save();

            $meeting = new Meeting;
            $meeting->Student = $student->id;
            $meeting->Staff = User::find($student->Supervisor)->id;
            $meeting->Course = $course->id;
            $date = new DateTime();
            $date->add(new DateInterval('P60D'));
            $meeting->time = $date;
            $meeting->agenda = "Meeting requested by student";
            $meeting->accepted_student = true;
            $meeting->save();

            $meeting = new Meeting;
            $meeting->Student = $student->id;
            $meeting->Staff = User::find($student->Supervisor)->id;
            $meeting->Course = $course->id;
            $date = new DateTime();
            $interval = new DateInterval('P3D');
            $interval->invert = 1;
            $date->add($interval);
            $meeting->time = $date;
            $meeting->agenda = "Chat that we already had about my project";
            $meeting->held = true;
            $meeting->minutes = "Had a good chat, we spoke about how well I'm doing.";
            $meeting->accepted_student = true;
            $meeting->accepted_staff = true;
            $meeting->save();

            $meeting = new Meeting;
            $meeting->Student = $student->id;
            $meeting->Staff = User::find($student->Supervisor)->id;
            $meeting->Course = $course->id;
            $date = new DateTime();
            $interval = new DateInterval('P3D');
            $date->add($interval);
            $meeting->time = $date;
            $meeting->agenda = "Upcoming second talk about project";
            $meeting->minutes = "Had a good chat, we spoke about how well I'm doing.";
            $meeting->accepted_student = true;
            $meeting->accepted_staff = true;
            $meeting->save();
        }
    }
}
