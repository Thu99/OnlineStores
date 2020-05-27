<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            'url_image' => 'ss_a31_1.png',
            'product_id' => 1
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'ss_a31_2.png',
            'product_id' => 1
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'ss_a31_3.png',
            'product_id' => 1
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'ss_a31_4.png',
            'product_id' => 1
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'ss_a31_5.png',
            'product_id' => 1
        ]);
    }
}
