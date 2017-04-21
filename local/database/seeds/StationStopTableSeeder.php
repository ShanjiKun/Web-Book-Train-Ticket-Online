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
        	'date_arrive' => '2017-04-20 2:00:00',
        	'date_leave' => '2017-04-21 8:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 2,
        	'date_arrive' => '2017-04-22 02:00:00',
        	'date_leave' => '2017-04-22 02:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 3,
        	'date_arrive' => '2017-04-22 4:30:00',
        	'date_leave' => '2017-04-22 5:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 4,
        	'date_arrive' => '2017-04-22 14:00:00',
        	'date_leave' => '2017-04-22 14:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 5,
        	'date_arrive' => '2017-04-22 21:00:00',
        	'date_leave' => '2017-04-22 6:00:00'
        ]);

        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 1,
            'date_arrive' => '2017-04-20 2:00:00',
            'date_leave' => '2017-04-21 11:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 2,
            'date_arrive' => '2017-04-22 05:00:00',
            'date_leave' => '2017-04-22 05:15:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 3,
            'date_arrive' => '2017-04-22 7:30:00',
            'date_leave' => '2017-04-23 8:00:00'
        ]);

        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 5,
            'date_arrive' => '2017-04-20 2:00:00',
            'date_leave' => '2017-04-21 09:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 4,
            'date_arrive' => '2017-04-21 15:45:00',
            'date_leave' => '2017-04-21 16:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 3,
            'date_arrive' => '2017-04-22 01:30:00',
            'date_leave' => '2017-04-22 02:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 2,
            'date_arrive' => '2017-04-22 04:15:00',
            'date_leave' => '2017-04-22 04:30:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 1,
            'date_arrive' => '2017-04-22 22:30:00',
            'date_leave' => '2017-04-23 6:00:00'
        ]);

         DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 5,
            'date_arrive' => '2017-04-20 9:00:00',
            'date_leave' => '2017-04-21 11:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 4,
            'date_arrive' => '2017-04-21 17:45:00',
            'date_leave' => '2017-04-21 18:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 3,
            'date_arrive' => '2017-04-22 03:30:00',
            'date_leave' => '2017-04-22 05:00:00'
        ]);
    }
}
