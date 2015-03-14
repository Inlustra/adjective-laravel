<?php

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degree = Degree::find(1);
        $user = User::find(1);
        $graduating = '2015/07/12';
        $student = new Student;
        $student->degree = $degree;
        $student->user = $user;
        $student->graduating = $graduating;
        $student->save();

        $user = User::find(2);
        $graduating = '2015/07/12';
        $student = new Student;
        $student->degree = $degree;
        $student->user = $user;
        $student->graduating = $graduating;
        $student->save();

        $user = User::find(3);
        $graduating = '2015/07/12';
        $student = new Student;
        $student->degree = $degree;
        $student->user = $user;
        $student->graduating = $graduating;
        $student->save();

    }
}
