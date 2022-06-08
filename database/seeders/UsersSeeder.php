<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Administrator',
        ]);
        Role::create([
            'name' => 'Front Desk',
            'description' => 'Front Desk',
        ]);
        
        Role::create([
            'name' => 'Housekeeping',
            'description' => 'Housekeeping',
        ]);

        Role::create([
            'name' => 'Kitchen',
            'description' => 'Kitchen',
        ]);


        User::create([
            'name' => 'Admin',
            'email' => 'dmovie@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Front Desk',
            'email' => 'frontdesk@gmail.com',
            'password' => bcrypt('frontdesk'),
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'Housekeeping',
            'email' => 'housekeeping@gmail.com',
            'password' => bcrypt('housekeeping'),
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'Kitchen',
            'email' => 'kitchen@gmail.com',
            'password' => bcrypt('kitchen'),
            'role_id' => 4,
        ]);

    }
}