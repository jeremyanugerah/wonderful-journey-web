<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'admin', 
            'email'=>'admin@email.com', 
            'email_verified_at'=>now(), 
            'phone' => '1234567890',
            'password'=>Hash::make('admin123'), 
            'role'=>'admin', 
            'remember_token' => Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),]
        ]);
    }
}
