<?php

class UserStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(9);
        $user->staffRoles()->attach(1);

        $user = User::find(10);
        $user->staffRoles()->attach(1);
    }
}
