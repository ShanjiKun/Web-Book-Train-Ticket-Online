<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	function createTicket($numSeat, $carId)
	    {
	    	for($ct = 0; $ct < $numSeat; $ct++)
	    	{
	    		DB::table('tickets')->insert([
		        	'car_id' => $carId
		        ]);
	    	}
	    }
        //ticket_id, car_id
        createTicket(80, 1);
        createTicket(42, 2);
        createTicket(80, 3);
        createTicket(28, 4);
        createTicket(80, 5);
        createTicket(64, 6);
        createTicket(80, 7);
        createTicket(42, 8);
    }
}
