<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
  //       DB::table('users')->insert([
		//  	'name' => 'Sa',
		//  	'email' => 'nts31192@gmail.com',
		//  	'password' => bcrypt('123456'),
		// ]);
		$this->call(UserSeeder::class);
    }
}

class UserSeeder extends Seeder {
	public function run() 
	{
		DB::table('users')->insert([ 
			['name' => 'Sa1992', 'email' => 'nts311922@gmail.com','password' => bcrypt('123456')],
			['name' => 'Laravel', 'email' => str_random(3).'@gmail.com', 'password' => bcrypt('123456')],
			['name' => 'PHP', 'email' => str_random(3).'@gmail.com', 'password' => bcrypt('123456')]
		]);
	}
}