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
            'url_image' => 'samsung/ssa71.png',
            'product_id' => 4
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'samsung/sss20.png',
            'product_id' => 5
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'samsung/sss10.png',
            'product_id' => 6
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'samsung/ss_a31_1.png',
            'product_id' => 7
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'samsung/ss_a11_1.png',
            'product_id' => 8
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'oppo/oppo_find_x2_1.png',
            'product_id' => 10
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'oppo/oppo_find_x2_1.png',
            'product_id' => 11
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'oppo/oppo_a9_1.png',
            'product_id' => 12
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'oppo/a12_1.png',
            'product_id' => 13
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'oppo/a1k_1.png',
            'product_id' => 14
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'iphone/11_pro_1.png',
            'product_id' => 15
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'iphone/xs_max_1.png',
            'product_id' => 16
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'iphone/iphone_7.png',
            'product_id' => 17
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'iphone/iphone_8.png',
            'product_id' => 18
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'iphone/iphone_se',
            'product_id' => 19
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'vivo/v19_1.png',
            'product_id' => 20
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'vivo/v15_1.png',
            'product_id' => 21
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'vivo/y50_1.png',
            'product_id' => 22
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'vivo/s1_1.png',
            'product_id' => 23
        ]);

        DB::table('product_images')->insert([
            'url_image' => 'vivo/y30_1.png',
            'product_id' => 24
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'vsmart/active_3.png',
            'product_id' => 25
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'vsmart/joy_3.png',
            'product_id' => 26
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'vsmart/star3.png',
            'product_id' => 27
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'xiaomi/note_9.png',
            'product_id' => 28
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'xiaomi/note_10.png',
            'product_id' => 29
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'xiaomi/redmi_note_8.png',
            'product_id' => 30
        ]);
        DB::table('product_images')->insert([
            'url_image' => 'xiaomi/mi_a3.png',
            'product_id' => 31
        ]);
    }
}
