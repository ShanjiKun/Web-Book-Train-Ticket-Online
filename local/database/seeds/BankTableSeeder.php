<?php

use Illuminate\Database\Seeder;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank')->insert([
        	'bankID' => 'vib',
        	'name' => 'VietinBank',
        	'linkAPI' => 'vib\payment'
        ]);

        DB::table('bank')->insert([
        	'bankID' => 'vcb',
        	'name' => 'Vietcombank',
        	'linkAPI' => 'vcb\payment'
        ]);

        DB::table('bank')->insert([
        	'bankID' => 'acb',
        	'name' => 'ACB',
        	'linkAPI' => 'acb\payment'
        ]);

        DB::table('bank')->insert([
        	'bankID' => 'agb',
        	'name' => 'Agribank',
        	'linkAPI' => 'agb\payment'
        ]);
    }
}
