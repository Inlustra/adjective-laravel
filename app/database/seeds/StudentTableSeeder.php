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
        for ($i = 1; $i <= 8; $i++) {
            $user = User::find($i);
            $student = $user->student ?: new Student;
            $graduating = '2015/07/12';
            $student->degree = $degree->id;
            $student->graduating = $graduating;
            $user->student()->save($student);
        }

    }
}
