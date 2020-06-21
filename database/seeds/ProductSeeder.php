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
        //1.Samsung
        DB::table('products')->insert([
            'product_name' => 'Samsung Galaxy A71',
            'slug' => 'samsunggalaxya71',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.7", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '32 MP',
            'memory' => '128 GB',
            'ram' => '8 GB',
            'cpu' => 'OPPO A83',
            'battery_capacity' => '4500 mAh, có sạc nhanh',
            'img_main' => 'samsung/ssa71.png',
            'price' => '9790000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Samsung Galaxy S20+',
            'slug' => 'samsunggalaxys20',
            'quantity' => 100,
            'screen' => 'Dynamic AMOLED 2X, 6.7",Full HD+',
            'operation_system' => 'Android 10',
            'camera' => 'Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D',
            'memory' => '128 GB',
            'ram' => '8 GB',
            'cpu' => 'Exynos 990 8 nhân',
            'battery_capacity' => '4500 mAh, có sạc nhanh',
            'img_main' => 'samsung/sss20.png',
            'price' => '21490000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Samsung Galaxy S10',
            'slug' => 'samsunggalaxys10lite',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.7", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => 'Chính 48 MP & Phụ 12 MP, 5 MP',
            'memory' => '128 GB',
            'ram' => '8 GB',
            'cpu' => '	Snapdragon 855 8 nhân',
            'battery_capacity' => '4500 mAh, có sạc nhanh',
            'img_main' => 'samsung/sss10.png',
            'price' => '21490000',
        ]);

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
            'img_main' => 'samsung/ss_a31_1.png',
            'price' => '6490000',
        ]);
        DB::table('products')->insert([
            'product_name' => 'Samsung Galaxy A11',
            'slug' => 'samsunggalaxya11',
            'quantity' => 100,
            'screen' => '6.4 inches, HD +',
            'operation_system' => 'Android 10',
            'camera' => 'Chính 13 MP & Phụ 5 MP, 2 MP',
            'memory' => '32 GB',
            'ram' => '3 GB',
            'cpu' => 'Snapdragon 450 8 nhân, 8, 1.8 GHz',
            'battery_capacity' => '4000 mAh',
            'img_main' => 'samsung/ss_a11_1.png',
            'price' => '3690000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Samsung Galaxy A11',
            'slug' => 'samsunggalaxya11',
            'quantity' => 100,
            'screen' => '6.4 inches, HD +',
            'operation_system' => 'Android 10',
            'camera' => 'Chính 13 MP & Phụ 5 MP, 2 MP',
            'memory' => '32 GB',
            'ram' => '3 GB',
            'cpu' => 'Snapdragon 450 8 nhân, 8, 1.8 GHz',
            'battery_capacity' => '4000 mAh',
            'img_main' => 'samsung/ss_a11_1.png',
            'price' => '3690000',
        ]);

        //2.OPPO
        DB::table('products')->insert([
            'product_name' => 'OPPO Find X2',
            'slug' => 'oppofindx2',
            'quantity' => 100,
            'screen' => '6.4 inches, HD +',
            'operation_system' => 'Android 9',
            'camera' => '48 MP+ 5 MP',
            'memory' => '32 GB',
            'ram' => '6 GB',
            'cpu' => 'Qualcomm® SnapdragonTM 710, 8, 2.2 GHz',
            'battery_capacity' => '3765 mAh',
            'img_main' => 'oppo/oppo_find_x2_1.png',
            'price' => '8790000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'OPPO A5s',
            'slug' => 'oppoa5s',
            'quantity' => 100,
            'screen' => '6.2 inches, HD +',
            'operation_system' => 'Android 8.1',
            'camera' => '13.0 MP + 2.0 MP',
            'memory' => '32 GB',
            'ram' => '6 GB',
            'cpu' => 'IMG GE8320',
            'battery_capacity' => '4230 mAh',
            'img_main' => 'oppo/oppo_find_x2_1.png',
            'price' => '3290000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Oppo A9',
            'slug' => 'oppoa9',
            'quantity' => 100,
            'screen' => '6.5 inchs, HD +',
            'operation_system' => 'Android 8.1',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => 'Qualcomm Snapdragon 665, 8, 8 nhân, tối đa 2.0GHz',
            'battery_capacity' => '5000mAh',
            'img_main' => 'oppo/oppo_a9_1.png',
            'price' => '5990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'OPPO A12',
            'slug' => 'OPPOA12',
            'quantity' => 100,
            'screen' => '6.5 inchs, HD +',
            'operation_system' => 'Android 8.1',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => 'Qualcomm Snapdragon 665, 8, 8 nhân, tối đa 2.0GHz',
            'battery_capacity' => '5000mAh',
            'img_main' => 'oppo/a12_1.png',
            'price' => '5990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'OPPO A1K',
            'slug' => 'OPPOA1K',
            'quantity' => 100,
            'screen' => '6.5 inchs, HD +',
            'operation_system' => 'Android 8.1',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => 'Qualcomm Snapdragon 665, 8, 8 nhân, tối đa 2.0GHz',
            'battery_capacity' => '5000mAh',
            'img_main' => 'oppo/a1k_1.png',
            'price' => '2690000',
        ]);
        //3 Iphone
        DB::table('products')->insert([
            'product_name' => 'iPhone 11 Pro Max',
            'slug' => 'iPhone11ProMax',
            'quantity' => 100,
            'screen' => '	OLED, 6.5", Super Retina XDR',
            'operation_system' => 'iOS 13',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Apple A13 Bionic 6 nhân',
            'battery_capacity' => '3969 mAh',
            'img_main' => 'iphone/11_pro_1.png',
            'price' => '31990000',
        ]);
        DB::table('products')->insert([
            'product_name' => 'iPhone Xs Max',
            'slug' => 'iPhoneXsMax',
            'quantity' => 100,
            'screen' => '	OLED, 6.5", Super Retina XDR',
            'operation_system' => 'iOS 13',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Apple A13 Bionic 6 nhân',
            'battery_capacity' => '3969 mAh',
            'img_main' => 'iphone/xs_max_1.png',
            'price' => '25990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'iPhone 7',
            'slug' => 'iPhone7',
            'quantity' => 100,
            'screen' => '	LED-backlit IPS LCD, 5.5", Retina HD',
            'operation_system' => 'iOS 13',
            'camera' => '7 MP',
            'memory' => '64 GB',
            'ram' => '3 GB',
            'cpu' => '	Apple A13 Bionic 6 nhân',
            'battery_capacity' => '3969 mAh',
            'img_main' => 'iphone/iphone_7.png',
            'price' => '9990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'iPhone 8',
            'slug' => 'iPhone8',
            'quantity' => 100,
            'screen' => '	LED-backlit IPS LCD, 5.5", Retina HD',
            'operation_system' => 'iOS 13',
            'camera' => '7 MP',
            'memory' => '64 GB',
            'ram' => '3 GB',
            'cpu' => '	Apple A13 Bionic 6 nhân',
            'battery_capacity' => '3969 mAh',
            'img_main' => 'iphone/iphone_8.png',
            'price' => '13990000',
        ]);
        DB::table('products')->insert([
            'product_name' => 'iPhone SE 2020',
            'slug' => 'iPhone8',
            'quantity' => 100,
            'screen' => '	LED-backlit IPS LCD, 5.5", Retina HD',
            'operation_system' => 'iOS 13',
            'camera' => '7 MP',
            'memory' => '64 GB',
            'ram' => '3 GB',
            'cpu' => '	Apple A13 Bionic 6 nhân',
            'battery_capacity' => '3969 mAh',
            'img_main' => 'iphone/iphone_se',
            'price' => '12490000',
        ]);
        //4.vivo

        DB::table('products')->insert([
            'product_name' => 'Vivo V19',
            'slug' => 'VivoV19',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vivo/v19_1.png',
            'price' => '8590000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Vivo V15',
            'slug' => 'VivoV15',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vivo/v15_1.png',
            'price' => '4990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Vivo Y50',
            'slug' => 'VivoY50',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vivo/y50_1.png',
            'price' => '6290000 ',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Vivo S1',
            'slug' => 'VivoS1',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vivo/s1_1.png',
            'price' => '5490000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Vivo Y30',
            'slug' => 'VivoY30',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vivo/y30_1.png',
            'price' => '4990000',
        ]);


        //5.Vsmart
        DB::table('products')->insert([
            'product_name' => 'Vsmart Active 3',
            'slug' => 'VsmartActive3',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vsmart/active_3.png',
            'price' => '3990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Vsmart Joy 3',
            'slug' => 'VsmartJoy3',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 9',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vsmart/joy_3.png',
            'price' => '3290000',
        ]);


        DB::table('products')->insert([
            'product_name' => 'Vsmart Star 3',
            'slug' => 'VsmartStar3',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 9',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'vsmart/star3.png',
            'price' => '1990000',
        ]);

        //6.Xiaomi

        DB::table('products')->insert([
            'product_name' => 'Xiaomi Redmi Note 9S',
            'slug' => 'XiaomiRedmiNote9S',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'xiaomi/note_9.png',
            'price' => '5990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Xiaomi Mi Note 10 ',
            'slug' => 'XiaomiMiNote10 ',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'xiaomi/note_10.png',
            'price' => '13990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Xiaomi Redmi Note 8 ',
            'slug' => 'XiaomiRedmiNote8',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'xiaomi/redmi_note_8.png',
            'price' => '5990000',
        ]);

        DB::table('products')->insert([
            'product_name' => 'Xiaomi Mi A3',
            'slug' => 'XiaomiMiA3',
            'quantity' => 100,
            'screen' => 'Super AMOLED, 6.44", Full HD+',
            'operation_system' => 'Android 10',
            'camera' => '48 MP',
            'memory' => '128 GB',
            'ram' => '6 GB',
            'cpu' => '	Snapdragon 712 8 nhân',
            'battery_capacity' => '4500mAh',
            'img_main' => 'xiaomi/mi_a3.png',
            'price' => '3490000',
        ]);
    }
}
