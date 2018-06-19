<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\TripRoleModel;
use App\Models\TripUserModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(AdmingroupsTableSeeder::class);
    }
}

/* 
	User Table Seeder
*/

class UserTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('trip_user')->truncate();

        TripUserModel::create(
            [
                'role_id' => 1,
                'full_name' => 'super admin',
                'email' => 'superadmin@travelagent.com',
                'password' => bcrypt('123456'),
                'address' => '',
                'phone' => '',
                'mobile_phone' => '',
                'province_id' => '',
                'regency_id' => '',
                'district_id' => '',
                'activation_key' => '',
                'register_datetime' => date('Y-m-d H:i:s'),
                'last_visit_datetime' => date('Y-m-d H:i:s'),

                'is_blocked' => false,
                'reset_count' => 0,
                'last_reset_datetime' => date('Y-m-d H:i:s'),
                'is_active' => true,

                'created_by' => 'Super Administrator',
                'last_modified_by' => 'Super Administrator',
            ]
        );
    }
}


/* 
	Admingroup Table Seeder
*/

class AdmingroupsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('trip_role')->truncate();

        TripRoleModel::create(
            [
                'id' => 1,
                'name' => 'Super Administrator',
                'description' => '',

                'created_by' => 'Super Administrator',
                'created_datetime' => date('Y-m-d H:i:s'),
                'last_modified_by' => 'Super Administrator',
                'last_modified_datetime' => date('Y-m-d H:i:s'),
            ]
        );

        TripRoleModel::create(
            [
                'id' => 2,
                'name' => 'Administrator',
                'description' => '',

                'created_by' => 'Super Administrator',
                'created_datetime' => date('Y-m-d H:i:s'),
                'last_modified_by' => 'Super Administrator',
                'last_modified_datetime' => date('Y-m-d H:i:s'),
            ]
        );

        TripRoleModel::create(
            [
                'id' => 3,
                'name' => 'Vendor',
                'description' => '',

                'created_by' => 'Super Administrator',
                'created_datetime' => date('Y-m-d H:i:s'),
                'last_modified_by' => 'Super Administrator',
                'last_modified_datetime' => date('Y-m-d H:i:s'),
            ]
        );

        TripRoleModel::create(
            [
                'id' => 4,
                'name' => 'Production',
                'description' => '',

                'created_by' => 'Super Administrator',
                'created_datetime' => date('Y-m-d H:i:s'),
                'last_modified_by' => 'Super Administrator',
                'last_modified_datetime' => date('Y-m-d H:i:s'),
            ]
        );

        TripRoleModel::create(
            [
                'id' => 5,
                'name' => 'Operation',
                'description' => '',

                'created_by' => 'Super Administrator',
                'created_datetime' => date('Y-m-d H:i:s'),
                'last_modified_by' => 'Super Administrator',
                'last_modified_datetime' => date('Y-m-d H:i:s'),
            ]
        );

        TripRoleModel::create(
            [
                'id' => 6,
                'name' => 'Finance',
                'description' => '',

                'created_by' => 'Super Administrator',
                'created_datetime' => date('Y-m-d H:i:s'),
                'last_modified_by' => 'Super Administrator',
                'last_modified_datetime' => date('Y-m-d H:i:s'),
            ]
        );

        TripRoleModel::create(
            [
                'id' => 7,
                'name' => 'Customer',
                'description' => '',

                'created_by' => 'Super Administrator',
                'created_datetime' => date('Y-m-d H:i:s'),
                'last_modified_by' => 'Super Administrator',
                'last_modified_datetime' => date('Y-m-d H:i:s'),
            ]
        );
    }
}