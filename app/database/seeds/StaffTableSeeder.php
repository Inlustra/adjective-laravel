<?php

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Lecturer';
        $role = 'LECTURER';
        $staff = new Staff;
        $staff->name = $name;
        $staff->role = $role;
        $staff->save();
    }
}
