<?php
class StudentTableSeeder extends Seeder {
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$degree = '1';
$user = '1';
$graduating = '2015/07/12';
$student = new Student;
$student->degree = $degree;
$student->user = $user;
$student->graduating = $graduating;
$student->save();

$degree = '1';
$user = '2';
$graduating = '2015/07/12';
$student = new Student;
$student->degree = $degree;
$student->user = $user;
$student->graduating = $graduating;
$student->save();

$degree = '1';
$user = '3';
$graduating = '2015/07/12';
$student = new Student;
$student->degree = $degree;
$student->user = $user;
$student->graduating = $graduating;
$student->save();

}
}
