<?php

use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'type_id' => 1,
            'name' => 'Standard Type (CEM)',
            'pictures' => 'IMG_20190417_173843.jpg|IMG_20190417_173902.jpg|IMG_20190417_173917.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 2,
            'name' => 'Long Type (CEM)',
            'pictures' => 'IMG_20190417_173651.jpg|IMG_20190417_173746.jpg|IMG_20190417_173815.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 3,
            'name' => 'Standard Type (CBN)',
            'pictures' => 'IMG_20190417_181333.jpg|IMG_20190417_181346.jpg|IMG_20190417_181403.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 4,
            'name' => 'Long Type (CBN)',
            'pictures' => 'IMG_20190417_181831.jpg|IMG_20190417_181845.jpg|IMG_20190417_181906.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 5,
            'name' => 'Straight Shank',
            'pictures' => 'IMG_20190417_182045.jpg|IMG_20190417_182115.jpg|IMG_20190417_182136.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 6,
            'name' => 'Taper Shank',
            'pictures' => 'IMG_20190417_183108.jpg|IMG_20190417_183121.jpg|IMG_20190417_183136.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 7,
            'name' => 'Hand Reamer',
            'pictures' => 'IMG_20190417_183150.jpg|IMG_20190417_183202.jpg|IMG_20190417_183215.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 8,
            'name' => 'Machine Reamer',
            'pictures' => 'IMG_20190417_183226.jpg|IMG_20190417_183236.jpg|IMG_20190417_183248.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 9,
            'name' => 'Hand Tap',
            'pictures' => 'IMG_20190417_183336.jpg|IMG_20190417_183346.jpg|IMG_20190417_183356.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 10,
            'name' => 'Machine Tap',
            'pictures' => 'IMG_20190417_183301.jpg|IMG_20190417_183312.jpg|IMG_20190417_183321.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
        DB::table('product_types')->insert([
            'type_id' => 11,
            'name' => '2-Flutes',
            'pictures' => 'IMG_20190417_183408.jpg|IMG_20190417_183419.jpg|IMG_20190417_183453.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id' => 12,
            'name' => '4-Flutes',
            'pictures' => 'IMG_20190417_183502.jpg|IMG_20190417_183514.jpg|IMG_20190417_183531.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

    }
}
