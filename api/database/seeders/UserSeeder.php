<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_title' => 'Mr.',
            'first_name' => 'John',
            'last_name' => 'Smith',
            'user_name' => 'superadmin',
            'user_email' => 'koushik.chatterjee@accionlabs.com',
            'user_password' =>  Hash::make('Super@dmin'),
            'address1' => '1020 State Ave #APT 406, Coraopolis',
            'address2' => '',
            'city' => 'Orlando',
            'state' => 'FL',
            'country' => 'USA',
            'zip_code' => '32789',
            'mobile_number' => '8899909876',
            'office_phone' => '998763',
            'time_zone' => 'Eastern Standard Time',
            'profile_path' => '',
            'verified_number' =>'',
            'created_by' => 1,
            'created_on' =>  date('Y-m-d h:i:s'),
            'user_status' => 1,
        ]);

    }
}
