<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'admin'
            ],
            [
                'name' => 'Editor',
                'email' => 'editor@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'editor'
            ],
            [
                'name' => 'Author',
                'email' => 'author@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'author'
            ],
            [
                'name' => 'Guest-author',
                'email' => 'guestauthor@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'guest-author'
            ],
            [
                'name' => 'Contributor',
                'email' => 'contributor@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'contributor'
            ],
            [
                'name' => 'subscriber',
                'email' => 'subscriber@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'subscriber'
            ],


        ]);
    }
}
