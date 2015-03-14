<?php

class Student_CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::find(1);
        $course = Course::find(1);
        $user->student()->courses()->attach($course->id,
            array('Supervisor' => 9, 'SecondMarker' => 10));

        $user = User::find(2);
        $course = Course::find(1);
        $user->student()->courses()->attach($course->id,
            array('Supervisor' => 9, 'SecondMarker' => 10));
    }
}
