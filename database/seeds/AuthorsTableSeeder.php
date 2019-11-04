<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::truncate();
        Author::create([
        	'name' 		=> 'Daongat',
        	'email' 	=> 'daongate@mail.com',
        	'address' 	=> 'Hanoi',
        	'mobile' 	=> '0978932803',
        	'password' 	=> bcrypt('123456')
        ]);
    }
}
