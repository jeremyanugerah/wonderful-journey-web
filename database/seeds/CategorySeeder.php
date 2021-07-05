<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'Beach', 'created_at'=>now(), 'updated_at'=>now(),],
            ['name'=>'Mountain', 'created_at'=>now(), 'updated_at'=>now(),],
            ['name'=>'Waterfall', 'created_at'=>now(), 'updated_at'=>now(),],
            ['name'=>'Island','created_at'=>now(), 'updated_at'=>now(),],
            ['name'=>'Lake','created_at'=>now(), 'updated_at'=>now(),],
            ['name'=>'City', 'created_at'=>now(), 'updated_at'=>now(),],
            ['name'=>'Temple', 'created_at'=>now(), 'updated_at'=>now(),],
            ['name'=>'Theme Park', 'created_at'=>now(), 'updated_at'=>now(),],
        ]);
    }
}
