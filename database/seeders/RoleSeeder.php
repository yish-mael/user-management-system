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
        $roleData = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'This is the role of the administrator, the role with the most permissions; Create, read, update and delete'
            ],
            [
                'name' => 'Editor',
                'slug' => 'editor',
                'description' => 'Next to the administrator is the editor having permissions to create, read and update'
            ],
            [
                'name' => 'Basic',
                'slug' => 'basic',
                'description' => 'this role is for any user permitting them to read'
            ]
        ];

        DB::table('roles')->insert($roleData);
    }
}
