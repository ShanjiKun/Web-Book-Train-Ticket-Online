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
        	'date_arrive' => '2017-04-28 2:00:00',
        	'date_leave' => '2017-04-29 8:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 2,
        	'date_arrive' => '2017-04-30 02:00:00',
        	'date_leave' => '2017-04-30 02:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 3,
        	'date_arrive' => '2017-04-30 4:30:00',
        	'date_leave' => '2017-04-30 5:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 4,
        	'date_arrive' => '2017-04-30 14:00:00',
        	'date_leave' => '2017-04-30 14:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 5,
        	'date_arrive' => '2017-04-30 21:00:00',
        	'date_leave' => '2017-05-01 6:00:00'
        ]);

        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 1,
            'date_arrive' => '2017-04-28 2:00:00',
            'date_leave' => '2017-04-29 11:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 2,
            'date_arrive' => '2017-04-30 05:00:00',
            'date_leave' => '2017-04-30 05:15:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 3,
            'date_arrive' => '2017-04-30 7:30:00',
            'date_leave' => '2017-05-01 8:00:00'
        ]);

        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 5,
            'date_arrive' => '2017-04-28 2:00:00',
            'date_leave' => '2017-04-29 09:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 4,
            'date_arrive' => '2017-04-29 15:45:00',
            'date_leave' => '2017-04-29 16:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 3,
            'date_arrive' => '2017-04-30 01:30:00',
            'date_leave' => '2017-04-30 02:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 2,
            'date_arrive' => '2017-04-30 04:15:00',
            'date_leave' => '2017-04-30 04:30:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 1,
            'date_arrive' => '2017-04-30 22:30:00',
            'date_leave' => '2017-05-01 6:00:00'
        ]);

         DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 5,
            'date_arrive' => '2017-04-28 9:00:00',
            'date_leave' => '2017-04-29 11:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 4,
            'date_arrive' => '2017-04-29 17:45:00',
            'date_leave' => '2017-04-29 18:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 3,
            'date_arrive' => '2017-04-30 03:30:00',
            'date_leave' => '2017-04-30 05:00:00'
        ]);
    }
}
