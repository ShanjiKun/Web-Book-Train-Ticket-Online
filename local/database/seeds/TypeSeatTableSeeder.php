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
        	'name' => 'Ngồi cứng'
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'B80L',
        	'name' => 'Ngồi cứng điều hòa'
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'A64L',
        	'name' => 'Ngồi mềm điều hòa'
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'Bn42L',
        	'name' => 'Nằm cứng điều hòa'
        ]);
        DB::table('type_seat')->insert([
        	'type_seat_id' => 'An28L',
        	'name' => 'Nằm mềm điều hòa'
        ]);
    }
}
