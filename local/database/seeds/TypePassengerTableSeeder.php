<?php

use Illuminate\Database\Seeder;

class TypePassengerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //type_passenger_id, name, discount
        DB::table('type_passenger')->insert([
        	'type_passenger_id' => 'NL',
        	'name' => 'Người lớn',
        	'discount' => 0
        ]);
        DB::table('type_passenger')->insert([
        	'type_passenger_id' => 'HSSV',
        	'name' => 'Học sinh sinh viên',
        	'discount' => 10
        ]);
        DB::table('type_passenger')->insert([
        	'type_passenger_id' => 'TE',
        	'name' => 'Trẻ em',
        	'discount' => 20
        ]);
    }
}