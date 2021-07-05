<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            ['name'=>'Jeremy Anugerah', 
            'email'=>'jeremy@email.com', 
            'email_verified_at'=>now(), 
            'phone' => '1234567890',
            'password'=>Hash::make('jeremy123'), 
            'role'=>'user', 
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['name'=>'Andrea Geraldine', 
            'email'=>'andrea@email.com', 
            'email_verified_at'=>now(), 
            'phone' => '1234567890',
            'password'=>Hash::make('andrea123'), 
            'role'=>'user', 
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['name'=>'Calvin Purnawarman', 
            'email'=>'calvin@email.com', 
            'email_verified_at'=>now(), 
            'phone' => '1234567890',
            'password'=>Hash::make('calvin123'), 
            'role'=>'user', 
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['name'=>'Alicia Wanderlen', 
            'email'=>'alicia@email.com', 
            'email_verified_at'=>now(), 
            'phone' => '1234567890',
            'password'=>Hash::make('alicia123'), 
            'role'=>'user', 
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['name'=>'Selena Gouw', 
            'email'=>'selena@email.com', 
            'email_verified_at'=>now(), 
            'phone' => '1234567890',
            'password'=>Hash::make('selena123'), 
            'role'=>'user', 
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),],
        ]);
    }
}