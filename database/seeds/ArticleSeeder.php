<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['user_id'=>6, 
            'category_id'=>6, 
            'title'=>'City of Jakarta', 
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna tempus pellentesque ultrices, dui lacus finibus dolor, sit amet tristique dolor lorem dapibus arcu. Vivamus non tortor sit amet felis placerat ultricies. Donec vitae nulla placerat risus aliquet aliquam vitae in nisl. Quisque non aliquet turpis. Proin malesuada neque gravida tristique condimentum. Integer elementum, nulla in efficitur efficitur, nibh augue pretium lorem, porta malesuada elit tellus nec nibh. Donec sit amet neque vel tellus tempor gravida a et eros. Aliquam vitae tincidunt tortor. Cras vehicula condimentum rutrum.', 
            'image'=> 'City001.jpg',
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['user_id'=>3, 
            'category_id'=>7, 
            'title'=>'Borobudur Temple', 
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna tempus pellentesque ultrices, dui lacus finibus dolor, sit amet tristique dolor lorem dapibus arcu. Vivamus non tortor sit amet felis placerat ultricies. Donec vitae nulla placerat risus aliquet aliquam vitae in nisl. Quisque non aliquet turpis. Proin malesuada neque gravida tristique condimentum. Integer elementum, nulla in efficitur efficitur, nibh augue pretium lorem, porta malesuada elit tellus nec nibh. Donec sit amet neque vel tellus tempor gravida a et eros. Aliquam vitae tincidunt tortor. Cras vehicula condimentum rutrum.',
            'image'=> 'Temple001.jpg', 
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['user_id'=>4, 
            'category_id'=>2, 
            'title'=>'Bromo Mountain', 
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna tempus pellentesque ultrices, dui lacus finibus dolor, sit amet tristique dolor lorem dapibus arcu. Vivamus non tortor sit amet felis placerat ultricies. Donec vitae nulla placerat risus aliquet aliquam vitae in nisl. Quisque non aliquet turpis. Proin malesuada neque gravida tristique condimentum. Integer elementum, nulla in efficitur efficitur, nibh augue pretium lorem, porta malesuada elit tellus nec nibh. Donec sit amet neque vel tellus tempor gravida a et eros. Aliquam vitae tincidunt tortor. Cras vehicula condimentum rutrum.', 
            'image'=> 'Mountain001.jpg', 
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['user_id'=>2, 
            'category_id'=>8, 
            'title'=>'Dunia Fantasi, Ancol', 
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna tempus pellentesque ultrices, dui lacus finibus dolor, sit amet tristique dolor lorem dapibus arcu. Vivamus non tortor sit amet felis placerat ultricies. Donec vitae nulla placerat risus aliquet aliquam vitae in nisl. Quisque non aliquet turpis. Proin malesuada neque gravida tristique condimentum. Integer elementum, nulla in efficitur efficitur, nibh augue pretium lorem, porta malesuada elit tellus nec nibh. Donec sit amet neque vel tellus tempor gravida a et eros. Aliquam vitae tincidunt tortor. Cras vehicula condimentum rutrum.', 
            'image'=> 'ThemePark001.jpg', 
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['user_id'=>5, 
            'category_id'=>6, 
            'title'=>'City of Yogyakarta', 
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna tempus pellentesque ultrices, dui lacus finibus dolor, sit amet tristique dolor lorem dapibus arcu. Vivamus non tortor sit amet felis placerat ultricies. Donec vitae nulla placerat risus aliquet aliquam vitae in nisl. Quisque non aliquet turpis. Proin malesuada neque gravida tristique condimentum. Integer elementum, nulla in efficitur efficitur, nibh augue pretium lorem, porta malesuada elit tellus nec nibh. Donec sit amet neque vel tellus tempor gravida a et eros. Aliquam vitae tincidunt tortor. Cras vehicula condimentum rutrum.', 
            'image'=> 'City002.jpg', 
            'created_at'=>now(),
            'updated_at'=>now(),],

            ['user_id'=>2, 
            'category_id'=>1, 
            'title'=>'Pandawa Beach, Bali', 
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna tempus pellentesque ultrices, dui lacus finibus dolor, sit amet tristique dolor lorem dapibus arcu. Vivamus non tortor sit amet felis placerat ultricies. Donec vitae nulla placerat risus aliquet aliquam vitae in nisl. Quisque non aliquet turpis. Proin malesuada neque gravida tristique condimentum. Integer elementum, nulla in efficitur efficitur, nibh augue pretium lorem, porta malesuada elit tellus nec nibh. Donec sit amet neque vel tellus tempor gravida a et eros. Aliquam vitae tincidunt tortor. Cras vehicula condimentum rutrum.', 
            'image'=> 'Beach001.jpg', 
            'created_at'=>now(),
            'updated_at'=>now(),],

        ]);
    }
}
