<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //car_id, name, type_seat_id, num_seat
        DB::table('car')->insert([
        	'name' => 'C1',
        	'num_seat' => 80,
        	'type_seat_id' => 'B80'
        ]);
        DB::table('car')->insert([
        	'name' => 'C2',
        	'num_seat' => 42,
        	'type_seat_id' => 'Bn42L'
        ]);
        DB::table('car')->insert([
        	'name' => 'C3',
        	'num_seat' => 80,
        	'type_seat_id' => 'B80L'
        ]);
        DB::table('car')->insert([
        	'name' => 'C4',
        	'num_seat' => 28,
        	'type_seat_id' => 'An28L'
        ]);
        DB::table('car')->insert([
        	'name' => 'C5',
        	'num_seat' => 80,
        	'type_seat_id' => 'B80'
        ]);
        DB::table('car')->insert([
        	'name' => 'C6',
        	'num_seat' => 64,
        	'type_seat_id' => 'A64L'
        ]);
        DB::table('car')->insert([
        	'name' => 'C7',
        	'num_seat' => 80,
        	'type_seat_id' => 'B80L'
        ]);
        DB::table('car')->insert([
        	'name' => 'C8',
        	'num_seat' => 42,
        	'type_seat_id' => 'Bn42L'
        ]);
    }
}
