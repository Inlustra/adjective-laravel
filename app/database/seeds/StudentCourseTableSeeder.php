<?php

class StudentCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::find(1);

        $student = User::find(1)->student;
        $student->courses()->attach($course->id,
            array('Supervisor' => 9, 'SecondMarker' => 10));


        $student = User::find(2)->student;
        $student->courses()->attach($course->id,
            array('Supervisor' => 9, 'SecondMarker' => 10));
    }
}
