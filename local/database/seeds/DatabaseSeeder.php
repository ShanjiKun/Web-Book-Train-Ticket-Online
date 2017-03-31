<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StationTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(TrainTableSeeder::class);
        $this->call(TypePassengerTableSeeder::class);
        $this->call(TypeSeatTableSeeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TripTableSeeder::class);
        $this->call(TripCarTableSeeder::class);
        $this->call(StationStopTableSeeder::class);
        $this->call(TicketSoldTableSeeder::class);
    }
}
