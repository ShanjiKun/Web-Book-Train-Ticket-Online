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
        	'name' => 'SE1',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'train_id' => 'SE2',
        	'name' => 'SE2',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'train_id' => 'SE3',
        	'name' => 'SE3',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'train_id' => 'TN1',
        	'name' => 'TN1',
            'fare' => 5

        ]);
        DB::table('train')->insert([
        	'train_id' => 'TN2',
        	'name' => 'TN2',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'train_id' => 'TN3',
        	'name' => 'TN3',
            'fare' => 5
        ]);
    }
}
