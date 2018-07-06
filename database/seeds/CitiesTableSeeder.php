<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Nsukka',
            'Enugu',
            'Onitsha',
            'Aba'
        ];

        foreach ($cities as $city) {
            \App\Models\City::create(['name' => $city]);
        }
    }
}
