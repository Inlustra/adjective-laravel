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

        $student = User::find(3)->student;
        $student->courses()->attach($course->id,
            array('Supervisor' => 9, 'SecondMarker' => 10));


        $student = User::find(4)->student;
        $student->courses()->attach($course->id,
            array('Supervisor' => 9));

        $student = User::find(5)->student;
        $student->courses()->attach($course->id,
            array('Supervisor' => 9));

        $student = User::find(6)->student;
        $student->courses()->attach($course->id,
            array('SecondMarker' => 10));

        $student = User::find(7)->student;
        $student->courses()->attach($course->id,
            array('SecondMarker' => 10));

        $student = User::find(8)->student;
        $student->courses()->attach($course->id);
    }
}
