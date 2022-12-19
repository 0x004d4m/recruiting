<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            ["id"=>1,"name"=>"View Candidates","guard_name"=>"web"],
            ["id"=>2,"name"=>"Manage Candidates","guard_name"=>"web"],
            ["id"=>3,"name"=>"View Contact Requests","guard_name"=>"web"],
            ["id"=>4,"name"=>"Manage Contact Requests","guard_name"=>"web"],
            ["id"=>5,"name"=>"Manage Authentication","guard_name"=>"web"],
            ["id"=>6,"name"=>"Manage Logs","guard_name"=>"web"],
        ]);

        DB::table('roles')->insert([
            ["id"=>1,"name"=>"Super Admin","guard_name"=>"web"]
        ]);

        DB::table('model_has_roles')->insert([
            ["role_id"=>1,"model_type"=>"App\Models\User","model_id"=>"1"],
        ]);

        DB::table('role_has_permissions')->insert([
            ["permission_id"=>1,"role_id"=>1],
            ["permission_id"=>2,"role_id"=>1],
            ["permission_id"=>3,"role_id"=>1],
            ["permission_id"=>4,"role_id"=>1],
            ["permission_id"=>5,"role_id"=>1],
            ["permission_id"=>6,"role_id"=>1],
        ]);
    }
}
