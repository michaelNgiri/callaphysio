<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $states = [
           'Abia',
           'Adamawa',
           "Akwa-Ibom",
           'Anambra',
           'Bauchi',
           'Lagos',
           'Kano',
           'Abuja'
       ];

       foreach ($states as $state){
           \App\Models\State::create(['name'=>$state]);
        }
    }
}
