<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['superadmin', 'admin', 'user'];
        $i=0;
        foreach($roles as $role){
            DB::table('roles')->insert([
                'role_title' => $role,
                'role_desc' => '',
                'created_by'=> 1,
                'created_on' => date('Y-m-d h:i:s'),
                'role_status' => 1
            ]);
        $i++;
        }





    }
}
