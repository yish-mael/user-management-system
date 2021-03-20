<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionsData = [
            [
                'name' => 'Create User',
                'slug' => 'create_user',
                'description' => 'Access to create a user profile'
            ],
            [
                'name' => 'Read User',
                'slug' => 'read_user',
                'description' => 'Read only access for a user profile'
            ],
            [
                'name' => 'Update User',
                'slug' => 'update_user',
                'description' => 'Access to edit and update a User profile'
            ],
            [
                'name' => 'Delete User',
                'slug' => 'delete_user',
                'description' => 'Access to delete a user profile'
            ]
        ];

        DB::table('permissions')->insert($permissionsData);
    }
}
