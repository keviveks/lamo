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
        $userData = DB::table('users')->where('user_id', 1)->first();

        DB::table('user_profiles')->insert([
            'user_gender' => 'M',
            'user_dob'=> '',
            'user_ssn' => '',
            'user_drivers_licence' => '',
            'user_id' => $userData->user_id,
            'created_by' => '',
            'created_on' =>  date('Y-m-d h:i:s'),
            'user_status' => 1,
        ]);
    }
}
