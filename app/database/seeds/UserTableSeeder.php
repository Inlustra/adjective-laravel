<?php
 
class UserTableSeeder extends Seeder {
 
  /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
    $firstname = 'Thomas';
    $lastname = 'Nairn';
		$user = new User;
		$user->username = '$firstname.'.'.$lastname;
		$user->firstname = $firstname
		$user->lastname = $lastname
		$user->password = Hash::make('test');
		$user->save();
   }
 
}
