<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->insert([
            'user_gender' => 'M',
            'user_dob'=> date('1987-05-22 h:i:s'),
            'user_ssn' => '',
            'user_drivers_licence' => '',
            'user_id' =>1,
            'created_by' => 1,
            'created_on' =>  date('Y-m-d h:i:s'),
            'user_status' => 1,
        ]);
    }
}
