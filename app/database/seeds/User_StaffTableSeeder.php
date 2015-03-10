<?php
class User_StaffTableSeeder extends Seeder {
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$staff = '1';
$user = '9';
$staff_user = new Staff;
$staff_user->Staff = $staff;
$staff_user->User = $user;
$staff_user->save();

$staff = '1';
$user = '10';
$staff_user = new Staff;
$staff_user->Staff = $staff;
$staff_user->User = $user;
$staff_user->save();
}
}
