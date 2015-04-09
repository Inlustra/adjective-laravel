<?php

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $password = Hash::make('test');
        $firstname = 'Thomas';
        $lastname = 'Nairn';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->id = '1';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();

        $firstname = 'Lukas';
        $lastname = 'Bowden';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->id = '2';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();

        $firstname = 'Daniel';
        $lastname = 'Bailey';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->id = '3';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();
        
        $firstname = 'Richard';
        $lastname = 'Barker';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->id = '4';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();

        $firstname = 'Lee';
        $lastname = 'Johnson';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->id = '5';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();

        $firstname = 'Zoe';
        $lastname = 'Luo';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->id = '6';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();

        $firstname = 'Igor';
        $lastname = 'Jendoletov';
        $email = 'qlerok@gmail.com';
        $user = new User;
        $user->id = '7';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = Hash::make('check123');
        $user->save();

        $firstname = 'David';
        $lastname = 'Sime';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->id = '8';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();

        $firstname = 'Ray';
        $lastname = 'Stoneham';
        $email = 'raystone@gmail.com';
        $user = new User;
        $user->id = '9';
        $user->username = $firstname . '.' . $lastname;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = $password;
        $user->save();


        $firstname = 'Keeran';
        $lastname = 'Jamil';
		$email = $firstname .".". $lastname . '@adjective.xyz';
        $user = new User;
        $user->username = $firstname . '.' . $lastname;
        $user->id = '10';
        $user->firstname = $firstname;
        $user->lastname = $lastname;
		$user->email = $email;
        $user->password = $password;
        $user->save();

        $firstNames = ['Idell', 'Wilbert', 'Neda', 'Harriet', 'Theo',
            'Ashly', 'Debi', 'Lois', 'Kristal', 'Nicki',
            'Vincenzo', 'Laurinda', 'Annmarie', 'Nakia',
            'Lettie', 'Stefany', 'Theola', 'Jeanmarie', 'Carli',
            'Ruthanne', 'Shila', 'Lavina', 'Shanae', 'Alina', 'Esperanza',
            'Nettie', 'Shawnee', 'Hui', 'Dusty', 'Melinda', 'Tamara', 'Talia',
            'Kassandra', 'Janie', 'Lashaun', 'Herbert', 'Dinorah', 'Kirstin',
            'Zofia', 'Isreal', 'Rosalee', 'Jacquelyne', 'Lyndia', 'Merna', 'Marilee'
            , 'Albina', 'Torie', 'Anisha', 'Allie', 'Chara'];

        $lastNames = ['Salas', 'Rhodes', 'Moses', 'Larsen', 'Davies',
            'Lester', 'Armstrong', 'Wong', 'Taylor', 'Rice', 'Hester', 'Becker',
            'Ferrell', 'Hunter', 'Conner', 'Walters', 'Thompson', 'Newton', 'Fry',
            'Walsh', 'Cross', 'Herring', 'Wilcox', 'Browning', 'Salinas', 'Barron',
            'Whitney', 'Holloway', 'Obrien', 'Huber', 'Burnett', 'Sheppard', 'Sharp',
            'Mccann', 'Stevenson', 'Andrews', 'Knox', 'Castillo', 'Villa', 'Rodriguez',
            'Mcbride', 'Valentine', 'Ewing', 'Boyle', 'Kim', 'Brennan', 'Fisher',
            'Espinoza', 'Dickerson', 'Mcdowell'];
        for ($x = 0; $x <= 100; $x++) {

            $firstname = $firstNames[array_rand($firstNames)];
            $lastname = $lastNames[array_rand($lastNames)];
			$email = $firstname .".". $lastname . '@adjective.xyz';
            $user = new User;
            $user->username = $firstname . '.' . $lastname;
            $user->firstname = $firstname;
            $user->lastname = $lastname;
			$user->email = $email;
            $user->password = $password;
            $user->save();

        }
    }
}
