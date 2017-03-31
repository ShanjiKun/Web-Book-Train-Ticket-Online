<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //employee_id, name, password, username
        DB::table('employee')->insert([
        	'name' => 'Nguyễn Văn Bé',
        	'password' => Hash::make('123456'),
        	'username' => 'nvb',
            'level' => 1
        ]);
        DB::table('employee')->insert([
        	'name' => 'Trần Văn Bỏng',
        	'password' => Hash::make('123456'),
        	'username' => 'tvb',
            'level' => 2
        ]);

    }
}
