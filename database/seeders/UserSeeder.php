<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@test.com',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@test.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('user');

        $user = User::create([
            'name' => 'Operator Role',
            'email' => 'operator@test.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('operator');
    }
}
