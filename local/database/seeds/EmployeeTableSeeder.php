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
        	'employee_id' => 'emp1',
        	'name' => 'Nguyễn Văn Bé',
        	'password' => Hash::make('123456'),
        	'username' => 'nvb'
        ]);
        DB::table('employee')->insert([
        	'employee_id' => 'emp2',
        	'name' => 'Trần Văn Bỏng',
        	'password' => Hash::make('123456'),
        	'username' => 'tvb'
        ]);

    }
}
