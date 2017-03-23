<?php

use Illuminate\Database\Seeder;

class StationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Station: station_id, name, city, address, distance
        DB::table('station')->insert([
        	'station_id' => 1,
        	'name' => 'Sài Gòn',
        	'city' => 'TPHCM',
        	'address' => '01 Nguyễn Thông, Phường 9, Quận 3, TPHCM',
        	'distance' => 0
       	]);
       	DB::table('station')->insert([
        	'station_id' => 2,
        	'name' => 'Quãng Ngãi',
        	'city' => 'Quãng Ngãi',
        	'address' => '204 Nguyễn Chí Thanh, Phường Quảng Phú, TP. Quảng Ngãi',
        	'distance' => 800
       	]);
       	DB::table('station')->insert([
        	'station_id' => 3,
        	'name' => 'Đà Nẵng',
        	'city' => 'Đà Nẵng',
        	'address' => '791 Hải Phòng, Tam Thuận, Thanh Khê, Đà Nẵng',
        	'distance' => 900
       	]);
       	DB::table('station')->insert([
        	'station_id' => 4,
        	'name' => 'Vinh',
        	'city' => 'Vinh',
        	'address' => '01 Lệ Ninh, Quán Bàu, TP. Vinh, Nghệ An',
        	'distance' => 1300
       	]);
       	DB::table('station')->insert([
        	'station_id' => 5,
        	'name' => 'Hà Nội',
        	'city' => 'Hà Nội',
        	'address' => '120 Lê Duẩn, Của Nam, Hoàn Kiếm, Hà Nội',
        	'distance' => 1600
       	]);
    }
}
