<?php

use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //train_id, name
        DB::table('train')->insert([
        	'train_id' => 'SE1',
        	'name' => 'SE1'
        ]);
        DB::table('train')->insert([
        	'train_id' => 'SE2',
        	'name' => 'SE2'
        ]);
        DB::table('train')->insert([
        	'train_id' => 'SE3',
        	'name' => 'SE3'
        ]);
        DB::table('train')->insert([
        	'train_id' => 'TN1',
        	'name' => 'TN1'
        ]);
        DB::table('train')->insert([
        	'train_id' => 'TN2',
        	'name' => 'TN2'
        ]);
        DB::table('train')->insert([
        	'train_id' => 'TN3',
        	'name' => 'TN3'
        ]);
    }
}
