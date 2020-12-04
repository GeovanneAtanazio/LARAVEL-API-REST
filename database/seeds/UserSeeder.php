<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@blog.com',
            'password' => bcrypt('123456789'),

        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@blog.com',
            'password' => bcrypt('123456789'),

        ]);
    }
}
