<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Samsung Galaxy A31',
            'slug' => 'samsunggalaxya31',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.7", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => 'Chính 48 MP & Phụ 8 MP, 5 MP, 5 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => 'MediaTek MT6768 8 nhân (Helio P65)',
            'battery_capacity' => '5000 mAh',
            'img_main' => 'ss_a31_1.png',
            'price' => '6490000',
        ]);
    }
}
