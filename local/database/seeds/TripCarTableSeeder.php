<?php

use Illuminate\Database\Seeder;

class TripCarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //trip_id, car_id
        DB::table('trip_car')->insert([
        	'trip_id' => 1,
        	'car_id' => 1
        ]);
        DB::table('trip_car')->insert([
        	'trip_id' => 1,
        	'car_id' => 2
        ]);
        DB::table('trip_car')->insert([
            'trip_id' => 1,
            'car_id' => 6
        ]);
        DB::table('trip_car')->insert([
        	'trip_id' => 2,
        	'car_id' => 3
        ]);
        DB::table('trip_car')->insert([
        	'trip_id' => 2,
        	'car_id' => 4
        ]);
    }
}
