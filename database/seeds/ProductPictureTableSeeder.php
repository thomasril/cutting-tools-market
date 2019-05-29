<?php

use Illuminate\Database\Seeder;

class ProductPictureTableSeeder extends Seeder
{
     function run()
    {
        DB::table('product_pictures')->insert([
            'picture_id'    => 1,
            'type_id'       => 1,
            'path'          => 'IMG_20190417_173843.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 2,
            'type_id'       => 1,
            'path'          => 'IMG_20190417_173902.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 3,
            'type_id'       => 1,
            'path'          => 'IMG_20190417_173917.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 4,
            'type_id'       => 2,
            'path'      => 'IMG_20190417_173651.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 5,
            'type_id'       => 2,
            'path'      => 'IMG_20190417_173746.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 6,
            'type_id'       => 2,
            'path'      => 'IMG_20190417_173815.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 7,
            'type_id'       => 3,
            'path'      => 'IMG_20190417_181333.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 8,
            'type_id'       => 3,
            'path'      => 'IMG_20190417_181346.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'   => 9,
            'type_id'      => 3,
            'path'  => 'IMG_20190417_181403.jpg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 10,
            'type_id'       => 4,
            'path'      => 'IMG_20190417_181831.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 11,
            'type_id'       => 4,
            'path'      => 'IMG_20190417_181845.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 12,
            'type_id'       => 4,
            'path'      => 'IMG_20190417_181906.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 13,
            'type_id'       => 5,
            'path'      => 'IMG_20190417_182045.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 14,
            'type_id'       => 5,
            'path'      => 'IMG_20190417_182115.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 15,
            'type_id'       => 5,
            'path'      => 'IMG_20190417_182136.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 16,
            'type_id'       => 6,
            'path'      => 'IMG_20190417_183108.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 17,
            'type_id'       => 6,
            'path'      => 'IMG_20190417_183121.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 18,
            'type_id'       => 6,
            'path'      => 'IMG_20190417_183136.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 19,
            'type_id'       => 7,
            'path'      => 'IMG_20190417_183150.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 20,
            'type_id'       => 7,
            'path'      => 'IMG_20190417_183202.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 21,
            'type_id'       => 7,
            'path'      => 'IMG_20190417_183215.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 22,
            'type_id'       => 8,
            'path'      => 'IMG_20190417_183226.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 23,
            'type_id'       => 8,
            'path'      => 'IMG_20190417_183236.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 24,
            'type_id'       => 8,
            'path'      => 'IMG_20190417_183248.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 25,
            'type_id'       => 9,
            'path'      => 'IMG_20190417_183336.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 26,
            'type_id'       => 9,
            'path'      => 'IMG_20190417_183346.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 27,
            'type_id'       => 9,
            'path'      => 'IMG_20190417_183356.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 28,
            'type_id'       => 10,
            'path'      => 'IMG_20190417_183301.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 29,
            'type_id'       => 10,
            'path'      => 'IMG_20190417_183312.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 30,
            'type_id'       => 10,
            'path'      => 'IMG_20190417_183321.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 31,
            'type_id'       => 11,
            'path'      => 'IMG_20190417_183408.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 32,
            'type_id'       => 11,
            'path'      => 'IMG_20190417_183419.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 33,
            'type_id'       => 11,
            'path'      => 'IMG_20190417_183453.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('product_pictures')->insert([
            'picture_id'    => 34,
            'type_id'       => 12,
            'path'      => 'IMG_20190417_183502.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 35,
            'type_id'       => 12,
            'path'      => 'IMG_20190417_183514.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
        DB::table('product_pictures')->insert([
            'picture_id'    => 36,
            'type_id'       => 12,
            'path'      => 'IMG_20190417_183531.jpg',
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
    }
}
