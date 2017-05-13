<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
        	'name' => 'Bui Thi Huyen',
        	'password' => Hash::make('123456'),
        	'username' => 'huyenbui',
            'email' => 'huyenbui@gmail.com',
            'state' => 'E', 
            'level' => 1 //admin
        ]);
        DB::table('users')->insert([
        	'name' => 'Huynh Ton Vinh',
        	'password' => Hash::make('123456'),
        	'username' => 'vinhhuynh',
            'email' => 'vinhhuynh@gmail.com',
            'state' => 'E',
            'level' => 2 //Super admin
        ]);
    }
}
