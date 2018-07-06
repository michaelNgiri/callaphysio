<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
    }
}
