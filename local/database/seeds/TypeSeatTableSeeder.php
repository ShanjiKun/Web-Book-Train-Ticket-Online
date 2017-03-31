<?php

use Illuminate\Database\Seeder;

class TypeSeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //type_seat_id, name
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'B80',
        	'name' => 'Ngồi cứng',
            'fare' => 200
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'B80L',
        	'name' => 'Ngồi cứng điều hòa',
            'fare' => 250
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'A64L',
        	'name' => 'Ngồi mềm điều hòa',
            'fare' => 300
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'Bn42L',
        	'name' => 'Nằm cứng điều hòa',
            'fare' => 350
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'An28L',
        	'name' => 'Nằm mềm điều hòa',
            'fare' => 400
        ]);
    }
}
