<?php
class Student_CourseTableSeeder extends Seeder {
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$course = '1';
$student = '1';
$supervisor = '9';
$secondmarker = '10';
$student_course = new Student_Course;
$student_course->Course = $course;
$student_course->Student = $student;
$student_course->Supervisor = $supervisor;
$student_course->SecondMarker = $secondmarker;
$student_course->save();
}
}
