<?php

use Illuminate\Database\Seeder;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //trip_id, train_id, station_leave_id, station_arrive_id, employee_id, date_leave, date_arrive
        DB::table('trip')->insert([
        	'train_id' => 'SE1',
        	'station_leave_id' => 1,
        	'station_arrive_id' => 5,
        	'employee_id' => 'emp1',
        	'date_leave' => '2017-03-22 6:00:00',
        	'date_arrive' => '2017-03-23 21:00:00'
        ]);
        DB::table('trip')->insert([
        	'train_id' => 'SE2',
        	'station_leave_id' => 1,
        	'station_arrive_id' => 3,
        	'employee_id' => 'emp1',
        	'date_leave' => '2017-03-22 9:00:00',
        	'date_arrive' => '2017-03-23 8:30:00'
        ]);
    }
}
