<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('StaffTableSeeder');
        $this->call('DegreeTableSeeder');
        $this->call('CourseTableSeeder');
        $this->call('StudentTableSeeder');
        $this->call('UserStaffTableSeeder');
        $this->call('StudentCourseTableSeeder');
        $this->call('ConversationSeeder');
        $this->call('DeadlineTableSeeder');
    }

}
