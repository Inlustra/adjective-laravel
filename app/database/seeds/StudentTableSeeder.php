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
        $student = $user->student ?: new Student;
        $graduating = '2015/07/12';
        $student->degree = $degree->id;
        $student->graduating = $graduating;
        $user->student()->save($student);

        $user = User::find(2);
        $student = $user->student ?: new Student ;
        $graduating = '2015/07/12';
        $student->degree = $degree->id;
        $student->graduating = $graduating;
        $user->student()->save($student);

        $user = User::find(3);
        $student = $user->student ?: new Student;
        $graduating = '2015/07/12';
        $student->degree = $degree->id;
        $student->graduating = $graduating;
        $user->student()->save($student);

    }
}
