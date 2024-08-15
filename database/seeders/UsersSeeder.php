<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'user1',
                'password' => password_hash('user1', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'username' => 'user12',
                'password' => password_hash('user2', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'username' => 'user3',
                'password' => Hash::make('user3'), // Forma mais simplificada de -> password_hash('user3', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ]
            ]);
    }
}
