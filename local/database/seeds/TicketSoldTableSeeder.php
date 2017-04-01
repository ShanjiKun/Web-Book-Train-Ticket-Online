<?php

use Illuminate\Database\Seeder;

class TicketSoldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //status:
        // U: unavailble
        // S: sold
        // W: wait
        // A: available
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 1,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'S'
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 2,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'S'
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 3,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' => 3,
            'status' => 'S'
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 1,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 3,
        	'station_arrive_id' => 5,
            'status' => 'S'
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 311,
            'trip_id' => 1,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 1,
            'station_arrive_id' => 3,
            'status' => 'S'
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 341,
            'trip_id' => 1,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 3,
            'station_arrive_id' => 5,
            'status' => 'W'
        ]);

        DB::table('ticket_sold')->insert([
        	'ticket_id' => 81,
        	'trip_id' => 2,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'S'
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 123,
        	'trip_id' => 2,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'S'
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 124,
            'trip_id' => 2,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 1,
            'station_arrive_id' =>3,
            'status' => 'W'
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 125,
            'trip_id' => 2,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 1,
            'station_arrive_id' =>3,
            'status' => 'W'
        ]);
    }
}
