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
        	'name' => 'SE1',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'name' => 'SE2',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'name' => 'SE3',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'name' => 'TN1',
            'fare' => 5

        ]);
        DB::table('train')->insert([
        	'name' => 'TN2',
            'fare' => 5
        ]);
        DB::table('train')->insert([
        	'name' => 'TN3',
            'fare' => 5
        ]);
    }
}
