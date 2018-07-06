<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $countries =[
           'Nigeria'
       ];

       foreach ($countries as $country){
           \App\Models\Country::create(['name'=>$country]);
       }
    }
}
