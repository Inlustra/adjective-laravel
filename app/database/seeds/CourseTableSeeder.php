<?php

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Final Year Project';
        $director = '9';
        $course = new Course;
        $course->name = $name;
        $course->Director = $director;
        $course->save();
    }
}
