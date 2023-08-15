<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        User::insert([
                [
                    'user_id' => 'Superadmin',
                    'password' => Hash::make("faatihbilal"),
                    'role'  => '1',
                    'desc'  => 'Owner Super User'
                ],
                [
                    'user_id' => 'admin',
                    'password' => Hash::make("adminhbs12"),
                    'role'  => '2',
                    'desc'  => 'Admin'
                ]
            ]
        );
    }
}
