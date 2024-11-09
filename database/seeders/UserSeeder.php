<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'general')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'login_id' =>  str_pad(fake()->unique()->randomNumber(7), 8, '0', STR_PAD_LEFT),
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);
        $admin->roles()->attach($adminRole);

        $user = User::create([
            'name' => 'Regular User',
            'login_id' =>  str_pad(fake()->unique()->randomNumber(7), 8, '0', STR_PAD_LEFT),
            'email' => 'general@example.com',
            'password' => bcrypt('password')
        ]);
        $user->roles()->attach($userRole);
    }
}
