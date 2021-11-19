<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;
use DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //'name', 'address', 'supplier', 'status'

        DB::table('hotels')->insert([
            [
                'name' => 'Hotel Mercury',
                'address' => 'usa',
                'supplier' => 'Own',
                'status' => 'active',
            ],
            [
                'name' => 'Hotel Royal',
                'address' => 'usa',
                'supplier' => 'HotelBeds',
                'status' => 'active',
            ],
            [
                'name' => 'Hotel Taj',
                'address' => 'usa',
                'supplier' => 'SunHotels',
                'status' => 'active',
            ],
            [
                'name' => 'Hotel Luxor',
                'address' => 'usa',
                'supplier' => 'SunHotels',
                'status' => 'deactive',
            ]
        ]);
    }
}
