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
        $course->code = "FYP";
        $course->name = $name;
        $course->description = "Welcome to COMP1640 where you will apply your skills and knowledge in a realistic group project
                        using agile scrum methodology to develop a specific enterprise web system. The team will be able
                        to decide on the appropriate technology (e.g. PHP, ASP.NET, SharePoint), and you will be able to
                        specialise as designer, programmer, etc.";
        $course->save();


        $user = User::find($director);
        $user->staffCourses()->attach($course->id,
            array('role' => 'Director'));
    }
}
