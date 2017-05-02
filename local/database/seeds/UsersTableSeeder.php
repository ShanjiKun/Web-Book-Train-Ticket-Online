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
        	'name' => 'Nguyễn Văn A',
        	'password' => Hash::make('123456'),
        	'username' => 'nva',
            'email' => 'nva@gmail.com',
            'state' => 'E', 
            'level' => 1 //admin
        ]);
        DB::table('users')->insert([
        	'name' => 'Trần Văn B',
        	'password' => Hash::make('123456'),
        	'username' => 'tvb',
            'email' => 'tvb@gmail.com',
            'state' => 'E',
            'level' => 2 //Super admin
        ]);

        DB::table('users')->insert([
            'name' => 'Trần Văn C',
            'password' => Hash::make('123456'),
            'username' => 'tvc',
            'email' => 'tvc@gmail.com',
            'state' => 'E',
            'level' => 0 //normal user
        ]);

        DB::table('users')->insert([
            'name' => 'Trần Văn D',
            'password' => Hash::make('123456'),
            'username' => 'tvd',
            'email' => 'tvd@gmail.com',
            'state' => 'E',
            'level' => 0 //normal user
        ]);

    }
}
