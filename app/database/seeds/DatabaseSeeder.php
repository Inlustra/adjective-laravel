<?php

class DatabaseSeeder extends Seeder {

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
        $this->call('StudentTableSeeder');
        $this->call('User_StaffTableSeeder');
        $this->call('CourseTableSeeder');
        $this->call('Student_CourseTableSeeder');
	}

}
