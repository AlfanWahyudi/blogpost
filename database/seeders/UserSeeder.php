<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $table = 'users';

    public function run(): void
    {
        DB::table($this->table)->insert([
            'name' => 'Alfan Wahyudi',
            'email' => 'alfan@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table($this->table)->insert([
            [
                'name' => 'User 1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'User 3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('123'),
            ],
        ]);
    }
}
