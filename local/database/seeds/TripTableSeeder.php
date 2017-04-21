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
        	'train_id' => 1,
        	'station_leave_id' => 1,
        	'station_arrive_id' => 5,
        	'employee_id' => 1,
        	'date_leave' => '2017-04-21 6:00:00',
        	'date_arrive' => '2017-04-22 21:00:00',
            'date_sell' => '2017-04-20 00:00:00'
        ]);
        DB::table('trip')->insert([
        	'train_id' => 2,
        	'station_leave_id' => 1,
        	'station_arrive_id' => 3,
        	'employee_id' => 1,
        	'date_leave' => '2017-04-21 11:00:00',
        	'date_arrive' => '2017-04-22 7:30:00',
            'date_sell' => '2017-03-21 6:00:00'
        ]);

        DB::table('trip')->insert([
            'train_id' => 3,
            'station_leave_id' => 5,
            'station_arrive_id' => 1,
            'employee_id' => 1,
            'date_leave' => '2017-04-21 9:00:00',
            'date_arrive' => '2017-04-22 20:30:00',
            'date_sell' => '2017-03-21 6:00:00'
        ]);
        DB::table('trip')->insert([
            'train_id' => 4,
            'station_leave_id' => 5,
            'station_arrive_id' => 3,
            'employee_id' => 1,
            'date_leave' => '2017-04-21 9:00:00',
            'date_arrive' => '2017-04-22 03:30:00',
            'date_sell' => '2017-03-21 6:00:00'
        ]);
    }
}
