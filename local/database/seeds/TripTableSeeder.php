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
        //trip_id, train_id, station_leave_id, station_arrive_id, user_id, date_leave, date_arrive
        DB::table('trip')->insert([
        	'train_id' => 1,
        	'station_leave_id' => 1,
        	'station_arrive_id' => 5,
        	'user_id' => 1,
        	'date_leave' => '2017-05-01 6:00:00',
        	'date_arrive' => '2017-05-02 21:00:00',
            'date_sell' => '2017-04-20 00:00:00'
        ]);
        DB::table('trip')->insert([
        	'train_id' => 2,
        	'station_leave_id' => 1,
        	'station_arrive_id' => 3,
        	'user_id' => 1,
        	'date_leave' => '2017-05-01 11:00:00',
        	'date_arrive' => '2017-05-02 7:30:00',
            'date_sell' => '2017-03-21 6:00:00'
        ]);

        DB::table('trip')->insert([
            'train_id' => 3,
            'station_leave_id' => 5,
            'station_arrive_id' => 1,
            'user_id' => 1,
            'date_leave' => '2017-05-01 9:00:00',
            'date_arrive' => '2017-05-02 20:30:00',
            'date_sell' => '2017-03-21 6:00:00'
        ]);
        DB::table('trip')->insert([
            'train_id' => 4,
            'station_leave_id' => 5,
            'station_arrive_id' => 3,
            'user_id' => 1,
            'date_leave' => '2017-05-01 9:00:00',
            'date_arrive' => '2017-05-02 03:30:00',
            'date_sell' => '2017-03-21 6:00:00'
        ]);
    }
}
