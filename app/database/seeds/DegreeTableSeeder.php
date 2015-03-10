<?php
 
class DegreeTableSeeder extends Seeder {
 
  /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
$degree = new Degree;
$degree->name = 'Computing';
$degree->Director = '9';
$degree->save();
}
}
