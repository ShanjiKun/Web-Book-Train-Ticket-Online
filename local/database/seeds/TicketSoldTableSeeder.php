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
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 1,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'KKD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 2,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'KKD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 3,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' => 3,
            'status' => 'KKD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 1,
        	'trip_id' => 1,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 3,
        	'station_arrive_id' => 5,
            'status' => 'KKD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 4,
            'trip_id' => 1,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 1,
            'station_arrive_id' => 3,
            'status' => 'CGD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 5,
            'trip_id' => 1,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 3,
            'station_arrive_id' => 5,
            'status' => 'CGD' //unavailable
        ]);

        DB::table('ticket_sold')->insert([
        	'ticket_id' => 1,
        	'trip_id' => 2,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'KKD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
        	'ticket_id' => 2,
        	'trip_id' => 2,
        	'date_sell' => '2017-03-21 00:00:00',
        	'type_passenger_id' => 'NL',
        	'station_leave_id' => 1,
        	'station_arrive_id' =>3,
            'status' => 'KKD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 4,
            'trip_id' => 2,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 1,
            'station_arrive_id' =>3,
            'status' => 'CGD' //unavailable
        ]);
        DB::table('ticket_sold')->insert([
            'ticket_id' => 5,
            'trip_id' => 2,
            'date_sell' => '2017-03-21 00:00:00',
            'type_passenger_id' => 'NL',
            'station_leave_id' => 1,
            'station_arrive_id' =>3,
            'status' => 'CGD' //unavailable
        ]);
    }
}
