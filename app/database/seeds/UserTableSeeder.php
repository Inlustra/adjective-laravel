<?php
 
class UserTableSeeder extends Seeder {
 
  /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
   	$firstNames = ['Idell','Wilbert','Neda','Harriet','Theo',
   	'Ashly','Debi','Lois','Kristal','Nicki',
   	'Vincenzo','Laurinda','Annmarie','Nakia',
   	'Lettie','Stefany','Theola','Jeanmarie','Carli',
   	'Ruthanne','Shila','Lavina','Shanae','Alina','Esperanza',
   	'Nettie','Shawnee','Hui','Dusty','Melinda','Tamara','Talia',
   	'Kassandra','Janie','Lashaun','Herbert','Dinorah','Kirstin',
   	'Zofia','Isreal','Rosalee','Jacquelyne','Lyndia','Merna','Marilee'
   	,'Albina','Torie','Anisha','Allie','Chara'];
   	
   	$lastNames = ['Salas','Rhodes','Moses','Larsen','Davies',
   	'Lester','Armstrong','Wong','Taylor','Rice','Hester','Becker',
   	'Ferrell','Hunter','Conner','Walters','Thompson','Newton','Fry',
   	'Walsh','Cross','Herring','Wilcox','Browning','Salinas','Barron',
   	'Whitney','Holloway','Obrien','Huber','Burnett','Sheppard','Sharp',
   	'Mccann','Stevenson','Andrews','Knox','Castillo','Villa','Rodriguez',
   	'Mcbride','Valentine','Ewing','Boyle','Kim','Brennan','Fisher',
   	'Espinoza','Dickerson','Mcdowell'];
   	
   	for ($x = 0; $x <= 100; $x++) {
    		$firstname = $firstNames[array_rand($firstNames)];
    		$lastname = $lastNames[array_rand($lastNames)];
    		
		$user = new User;
		$user->username = $firstname.'.'.$lastname;
		$user->firstname = $firstname
		$user->lastname = $lastname
		$user->password = Hash::make('test');
		$user->save();
		} 
   }
 
}
