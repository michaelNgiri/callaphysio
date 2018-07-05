<?php

use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userTypes =[
        	'regular',
        	'physioherapist',
        	'super_user',
        	'admin',
        	'super_admin'

        ];

        foreach ($userTypes as $userType) {
        	UserType::create(['name'=>$userType]);
        }
    }
}
