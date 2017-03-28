<?php

use Illuminate\Database\Seeder;

class StationStopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //trip_id, station_id, time_arrive, time_leave
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 1,
        	'date_arrive' => '2017-03-21 2:00:00',
        	'date_leave' => '2017-03-22 6:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 2,
        	'date_arrive' => '2017-03-23 2:00:00',
        	'date_leave' => '2017-03-23 2:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 3,
        	'date_arrive' => '2017-03-23 4:30:00',
        	'date_leave' => '2017-03-23 5:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 4,
        	'date_arrive' => '2017-03-23 14:00:00',
        	'date_leave' => '2017-03-23 14:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 5,
        	'date_arrive' => '2017-03-23 21:00:00',
        	'date_leave' => '2017-03-24 6:00:00'
        ]);

        DB::table('station_stop')->insert([
        	'trip_id' => 2,
        	'station_id' => 1,
        	'date_arrive' => '2017-03-21 6:00:00',
        	'date_leave' => '2017-03-22 9:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 2,
        	'station_id' => 2,
        	'date_arrive' => '2017-03-23 6:00:00',
        	'date_leave' => '2017-03-23 6:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 2,
        	'station_id' => 3,
        	'date_arrive' => '2017-03-23 8:30:00',
        	'date_leave' => '2017-03-24 6:45:00'
        ]);
    }
}
