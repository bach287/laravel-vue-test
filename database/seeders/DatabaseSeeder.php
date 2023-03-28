<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
             'name' => 'Test User',
             'user_code' => 'user1',
             'image' => 'avatar-cute-12.jpeg',
             'user_id' => 'testuser',
             'gender' => 1,
             'country' => 'Vietnam',
             'payment_status' => 0,
             'created_at' => Carbon::now()
         ]);
    }
}
