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
        	'date_arrive' => '2017-03-31 2:00:00',
        	'date_leave' => '2017-04-01 8:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 2,
        	'date_arrive' => '2017-04-02 02:00:00',
        	'date_leave' => '2017-04-02 02:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 3,
        	'date_arrive' => '2017-04-02 4:30:00',
        	'date_leave' => '2017-04-02 5:00:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 4,
        	'date_arrive' => '2017-04-02 14:00:00',
        	'date_leave' => '2017-04-02 14:15:00'
        ]);
        DB::table('station_stop')->insert([
        	'trip_id' => 1,
        	'station_id' => 5,
        	'date_arrive' => '2017-04-02 21:00:00',
        	'date_leave' => '2017-04-02 6:00:00'
        ]);

        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 1,
            'date_arrive' => '2017-03-31 2:00:00',
            'date_leave' => '2017-04-01 11:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 2,
            'date_arrive' => '2017-04-02 05:00:00',
            'date_leave' => '2017-04-02 05:15:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 2,
            'station_id' => 3,
            'date_arrive' => '2017-04-02 7:30:00',
            'date_leave' => '2017-04-03 8:00:00'
        ]);

        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 5,
            'date_arrive' => '2017-03-31 2:00:00',
            'date_leave' => '2017-04-01 09:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 4,
            'date_arrive' => '2017-04-01 15:45:00',
            'date_leave' => '2017-04-01 16:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 3,
            'date_arrive' => '2017-04-02 01:30:00',
            'date_leave' => '2017-04-02 02:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 2,
            'date_arrive' => '2017-04-02 04:15:00',
            'date_leave' => '2017-04-02 04:30:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 3,
            'station_id' => 1,
            'date_arrive' => '2017-04-02 22:30:00',
            'date_leave' => '2017-04-03 6:00:00'
        ]);

         DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 5,
            'date_arrive' => '2017-03-31 9:00:00',
            'date_leave' => '2017-04-01 11:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 4,
            'date_arrive' => '2017-04-01 17:45:00',
            'date_leave' => '2017-04-01 18:00:00'
        ]);
        DB::table('station_stop')->insert([
            'trip_id' => 4,
            'station_id' => 3,
            'date_arrive' => '2017-04-02 03:30:00',
            'date_leave' => '2017-04-02 05:00:00'
        ]);
    }
}
