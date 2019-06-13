<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'product_id'    => '20403',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '2 mm Carbide End Mill',
            'price'         => 91000,
            'stock'         => 14,
            'lot_size'      => 4,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '30403',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '3 mm Carbide End Mill',
            'price'         => 91000,
            'stock'         => 20,
            'lot_size'      => 4,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40406',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '4 mm Carbide End Mill',
            'price'         => 91000,
            'stock'         => 12,
            'lot_size'      => 6,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '50406',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '5 mm Carbide End Mill',
            'price'         => 127000,
            'stock'         => 5,
            'lot_size'      => 8,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '60406',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '6 mm Carbide End Mill',
            'price'         => 127000,
            'stock'         => 6,
            'lot_size'      => 12,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '80408',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '8 mm Carbide End Mill',
            'price'         => 236000,
            'stock'         => 10,
            'lot_size'      => 7,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '100410',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '10 mm Carbide End Mill',
            'price'         => 358000,
            'stock'         => 8,
            'lot_size'      => 11,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '120412',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '12 mm Carbide End Mill',
            'price'         => 471000,
            'stock'         => 5,
            'lot_size'      => 14,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '160416',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '16 mm Carbide End Mill',
            'price'         => 1295000,
            'stock'         => 5,
            'lot_size'      => 12,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '200420',
            'category_id'   => 1,
            'type_id'       => 1,
            'name'          => '20 mm Carbide End Mill',
            'price'         => 1555000,
            'stock'         => 5,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Carbide End Mill (Long Type)
        DB::table('products')->insert([
            'product_id'    => '404100',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '4 X 100 mm Carbide End Mill',
            'price'         => 243000,
            'stock'         => 5,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '604100',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '6 X 100 mm Carbide End Mill',
            'price'         => 243000,
            'stock'         => 4,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '804100',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '8 X 100 mm Carbide End Mill',
            'price'         => 352000,
            'stock'         => 9,
            'lot_size'      => 11,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1004100',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '10 X 100 mm Carbide End Mill',
            'price'         => 496000,
            'stock'         => 10,
            'lot_size'      => 7,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1204100',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '12 X 100 mm Carbide End Mill',
            'price'         => 613000,
            'stock'         => 18,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '604150',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '6 X 150 mm Carbide End Mill',
            'price'         => 274000,
            'stock'         => 8,
            'lot_size'      => 13,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '804150',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '8 X 150 mm Carbide End Mill',
            'price'         => 429600,
            'stock'         => 4,
            'lot_size'      => 12,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1004150',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '10 X 150 mm Carbide End Mill',
            'price'         => 516000,
            'stock'         => 8,
            'lot_size'      => 9,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1204150',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '12 X 150 mm Carbide End Mill',
            'price'         => 636800,
            'stock'         => 12,
            'lot_size'      => 15,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1604150',
            'category_id'   => 1,
            'type_id'       => 2,
            'name'          => '16 X 150 mm Carbide End Mill',
            'price'         => 1540000,
            'stock'         => 16,
            'lot_size'      => 9,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Carbide Ball Nose (Standard Type)
        DB::table('products')->insert([
            'product_id'    => '20203',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '2 mm Carbide End Nose',
            'price'         => 142000,
            'stock'         => 8,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '30203',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '3 mm Carbide End Nose',
            'price'         => 142000,
            'stock'         => 20,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40204',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '4 mm Carbide End Nose',
            'price'         => 142000,
            'stock'         => 7,
            'lot_size'      => 6,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '50206',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '5 mm Carbide End Nose',
            'price'         => 284000,
            'stock'         => 22,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '60206',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '6 mm Carbide End Nose',
            'price'         => 284000,
            'stock'         => 8,
            'lot_size'      => 8,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '80208',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '8 mm Carbide End Nose',
            'price'         => 309000,
            'stock'         => 7,
            'lot_size'      => 12,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '100210',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '10 mm Carbide End Nose',
            'price'         => 517000,
            'stock'         => 11,
            'lot_size'      => 10,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '120212',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '12 mm Carbide End Nose',
            'price'         => 662000,
            'stock'         => 16,
            'lot_size'      => 12,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '160216',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '16 mm Carbide End Nose',
            'price'         => 1405000,
            'stock'         => 11,
            'lot_size'      => 10,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '200220',
            'category_id'   => 2,
            'type_id'       => 3,
            'name'          => '20 mm Carbide End Nose',
            'price'         => 1739000,
            'stock'         => 5,
            'lot_size'      => 9,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Carbide Ball Nose (Long Type)
        DB::table('products')->insert([
            'product_id'    => '402100',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '4 x 100 mm Carbide End Nose',
            'price'         => 259000,
            'stock'         => 7,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '602100',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '6 x 100 mm Carbide End Nose',
            'price'         => 259000,
            'stock'         => 4,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '802100',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '8 x 100 mm Carbide End Nose',
            'price'         => 365000,
            'stock'         => 10,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1002100',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '10 x 100 mm Carbide End Nose',
            'price'         => 580000,
            'stock'         => 6,
            'lot_size'      => 9,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1202100',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '12 x 100 mm Carbide End Nose',
            'price'         => 725000,
            'stock'         => 14,
            'lot_size'      => 9,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '602150',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '6 x 150 mm Carbide End Nose',
            'price'         => 343000,
            'stock'         => 10,
            'lot_size'      => 11,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '802150',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '8 x 150 mm Carbide End Nose',
            'price'         => 537000,
            'stock'         => 16,
            'lot_size'      => 11,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1002150',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '10 x 150 mm Carbide End Nose',
            'price'         => 645000,
            'stock'         => 5,
            'lot_size'      => 8,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1202150',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '12 x 150 mm Carbide End Nose',
            'price'         => 796000,
            'stock'         => 9,
            'lot_size'      => 16,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '1602150',
            'category_id'   => 2,
            'type_id'       => 4,
            'name'          => '16 x 150 mm Carbide End Nose',
            'price'         => 1726200,
            'stock'         => 4,
            'lot_size'      => 9,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Drill (Straight Shank)
        DB::table('products')->insert([
            'product_id'    => 'LN01',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '1 mm Straight Shank Drill',
            'price'         => 80200,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN02',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '2 mm Straight Shank Drill',
            'price'         => 80200,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN03',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '3 mm Straight Shank Drill',
            'price'         => 80200,
            'stock'         => 5,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN04',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '4 mm Straight Shank Drill',
            'price'         => 105000,
            'stock'         => 3,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN05',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '5 mm Straight Shank Drill',
            'price'         => 147000,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN06',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '6 mm Straight Shank Drill',
            'price'         => 191800,
            'stock'         => 3,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN07',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '7 mm Straight Shank Drill',
            'price'         => 238000,
            'stock'         => 5,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN08',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '8 mm Straight Shank Drill',
            'price'         => 300700,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN09',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '9 mm Straight Shank Drill',
            'price'         => 390500,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN10',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '10 mm Straight Shank Drill',
            'price'         => 503500,
            'stock'         => 10,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN011',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '11 mm Straight Shank Drill',
            'price'         => 186000,
            'stock'         => 8,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN012',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '12 mm Straight Shank Drill',
            'price'         => 225000,
            'stock'         => 7,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN013',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '13 mm Straight Shank Drill',
            'price'         => 267000,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN014',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '14 mm Straight Shank Drill',
            'price'         => 405000,
            'stock'         => 10,
            'lot_size'      => 4,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN15',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '15 mm Straight Shank Drill',
            'price'         => 468000,
            'stock'         => 5,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN16',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '16 mm Straight Shank Drill',
            'price'         => 525000,
            'stock'         => 3,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN17',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '17 mm Straight Shank Drill',
            'price'         => 597000,
            'stock'         => 3,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN18',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '18 mm Straight Shank Drill',
            'price'         => 777000,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN19',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '19 mm Straight Shank Drill',
            'price'         => 849000,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LN20',
            'category_id'   => 3,
            'type_id'       => 5,
            'name'          => '20 mm Straight Shank Drill',
            'price'         => 1053000,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Drill (Taper Shank)
        DB::table('products')->insert([
            'product_id'    => 'LT12',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '12 mm Taper Shank Drill',
            'price'         => 394500,
            'stock'         => 5,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT13',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '13 mm Taper Shank Drill',
            'price'         => 246000,
            'stock'         => 5,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT14',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '14 mm Taper Shank Drill',
            'price'         => 357000,
            'stock'         => 4,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT15',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '15 mm Taper Shank Drill',
            'price'         => 422000,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT16',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '16 mm Taper Shank Drill',
            'price'         => 464000,
            'stock'         => 8,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT17',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '17 mm Taper Shank Drill',
            'price'         => 393000,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT18',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '18 mm Taper Shank Drill',
            'price'         => 421000,
            'stock'         => 3,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT19',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '19 mm Taper Shank Drill',
            'price'         => 463000,
            'stock'         => 5,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => 'LT20',
            'category_id'   => 3,
            'type_id'       => 6,
            'name'          => '20 mm Taper Shank Drill',
            'price'         => 510000,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Reamer (Hand)
        DB::table('products')->insert([
            'product_id'    => '40010',
            'category_id'   => 4,
            'type_id'       => 7,
            'name'          => '10 mm Hand Reamer',
            'price'         => 360000,
            'stock'         => 10,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40011',
            'category_id'   => 4,
            'type_id'       => 7,
            'name'          => '11 mm Hand Reamer',
            'price'         => 406500,
            'stock'         => 4,
            'lot_size'      => 4,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40012',
            'category_id'   => 4,
            'type_id'       => 7,
            'name'          => '12 mm Hand Reamer',
            'price'         => 442000,
            'stock'         => 7,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40013',
            'category_id'   => 4,
            'type_id'       => 7,
            'name'          => '13 mm Hand Reamer',
            'price'         => 534000,
            'stock'         => 11,
            'lot_size'      => 6,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40014',
            'category_id'   => 4,
            'type_id'       => 7,
            'name'          => '14 mm Hand Reamer',
            'price'         => 571500,
            'stock'         => 5,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40015',
            'category_id'   => 4,
            'type_id'       => 7,
            'name'          => '15 mm Hand Reamer',
            'price'         => 670500,
            'stock'         => 5,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '40016',
            'category_id'   => 4,
            'type_id'       => 7,
            'name'          => '16 mm Hand Reamer',
            'price'         => 729000,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Reamer (Machine)
        DB::table('products')->insert([
            'product_id'    => '42810',
            'category_id'   => 4,
            'type_id'       => 8,
            'name'          => '10 mm Machine Reamer',
            'price'         => 277000,
            'stock'         => 9,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '42811',
            'category_id'   => 4,
            'type_id'       => 8,
            'name'          => '11 mm Machine Reamer',
            'price'         => 330600,
            'stock'         => 7,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '42812',
            'category_id'   => 4,
            'type_id'       => 8,
            'name'          => '12 mm Machine Reamer',
            'price'         => 330600,
            'stock'         => 8,
            'lot_size'      => 6,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '42813',
            'category_id'   => 4,
            'type_id'       => 8,
            'name'          => '13 mm Machine Reamer',
            'price'         => 368000,
            'stock'         => 6,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '42814',
            'category_id'   => 4,
            'type_id'       => 8,
            'name'          => '14 mm Machine Reamer',
            'price'         => 375000,
            'stock'         => 5,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '42815',
            'category_id'   => 4,
            'type_id'       => 8,
            'name'          => '15 mm Machine Reamer',
            'price'         => 496000,
            'stock'         => 6,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '42816',
            'category_id'   => 4,
            'type_id'       => 8,
            'name'          => '16 mm Machine Reamer',
            'price'         => 503000,
            'stock'         => 3,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Tap (Hand)
        DB::table('products')->insert([
            'product_id'    => '15140700',
            'category_id'   => 5,
            'type_id'       => 9,
            'name'          => 'M4 x 0.7 mm Hand Tap',
            'price'         => 206000,
            'stock'         => 7,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15150800',
            'category_id'   => 5,
            'type_id'       => 9,
            'name'          => 'M5 x 0.8 mm Hand Tap',
            'price'         => 210000,
            'stock'         => 11,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15161000',
            'category_id'   => 5,
            'type_id'       => 9,
            'name'          => 'M6 x 1.0 mm Hand Tap',
            'price'         => 224000,
            'stock'         => 5,
            'lot_size'      => 6,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15181250',
            'category_id'   => 5,
            'type_id'       => 9,
            'name'          => 'M8 x 1.25 mm Hand Tap',
            'price'         => 334000,
            'stock'         => 13,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15112175',
            'category_id'   => 5,
            'type_id'       => 9,
            'name'          => 'M12 x 1.75 mm Hand Tap',
            'price'         => 447000,
            'stock'         => 4,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // Tap (Machine)
        DB::table('products')->insert([
            'product_id'    => '15540700',
            'category_id'   => 5,
            'type_id'       => 10,
            'name'          => 'M4 x 0.7 mm Machine Tap',
            'price'         => 97500,
            'stock'         => 6,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15550800',
            'category_id'   => 5,
            'type_id'       => 10,
            'name'          => 'M5 x 0.8 mm Machine Tap',
            'price'         => 102500,
            'stock'         => 7,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15561000',
            'category_id'   => 5,
            'type_id'       => 10,
            'name'          => 'M6 x 1.0 mm Machine Tap',
            'price'         => 110000,
            'stock'         => 10,
            'lot_size'      => 4,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15581250',
            'category_id'   => 5,
            'type_id'       => 10,
            'name'          => 'M8 x 1.25 mm Machine Tap',
            'price'         => 124000,
            'stock'         => 7,
            'lot_size'      => 7,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '15512175',
            'category_id'   => 5,
            'type_id'       => 10,
            'name'          => 'M12 x 1.75 mm Machine Tap',
            'price'         => 222000,
            'stock'         => 11,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // HSS End Mill (2-Flute)
        DB::table('products')->insert([
            'product_id'    => '623002',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '2 mm 2 flute HSS End Mill',
            'price'         => 128000,
            'stock'         => 8,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623003',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '3 mm 2 flute HSS End Mill',
            'price'         => 94000,
            'stock'         => 6,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623004',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '4 mm 2 flute HSS End Mill',
            'price'         => 94000,
            'stock'         => 9,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623005',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '5 mm 2 flute HSS End Mill',
            'price'         => 94000,
            'stock'         => 7,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623006',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '6 mm 2 flute HSS End Mill',
            'price'         => 94000,
            'stock'         => 8,
            'lot_size'      => 3,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623008',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '8 mm 2 flute HSS End Mill',
            'price'         => 120000,
            'stock'         => 3,
            'lot_size'      => 4,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623010',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '10 mm 2 flute HSS End Mill',
            'price'         => 132000,
            'stock'         => 5,
            'lot_size'      => 5,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623012',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '12 mm 2 flute HSS End Mill',
            'price'         => 174000,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623016',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '16 mm 2 flute HSS End Mill',
            'price'         => 236000,
            'stock'         => 6,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '623020',
            'category_id'   => 6,
            'type_id'       => 11,
            'name'          => '6 mm 2 flute HSS End Mill',
            'price'         => 331000,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        // HSS End Mill (4-Flute)
        DB::table('products')->insert([
            'product_id'    => '621002',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '2 mm 4 flute HSS End Mill',
            'price'         => 142000,
            'stock'         => 3,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621003',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '3 mm 4 flute HSS End Mill',
            'price'         => 142000,
            'stock'         => 5,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621004',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '4 mm 4 flute HSS End Mill',
            'price'         => 142000,
            'stock'         => 4,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621005',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '5 mm 4 flute HSS End Mill',
            'price'         => 192000,
            'stock'         => 5,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621006',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '6 mm 4 flute HSS End Mill',
            'price'         => 192000,
            'stock'         => 7,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621008',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '8 mm 4 flute HSS End Mill',
            'price'         => 222000,
            'stock'         => 5,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621010',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '10 mm 4 flute HSS End Mill',
            'price'         => 246000,
            'stock'         => 5,
            'lot_size'      => 2,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621012',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '12 mm 4 flute HSS End Mill',
            'price'         => 332000,
            'stock'         => 7,
            'lot_size'      => 6,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621016',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '16 mm 4 flute HSS End Mill',
            'price'         => 458000,
            'stock'         => 8,
            'lot_size'      => 4,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);

        DB::table('products')->insert([
            'product_id'    => '621020',
            'category_id'   => 6,
            'type_id'       => 12,
            'name'          => '20 mm 4 flute HSS End Mill',
            'price'         => 668000,
            'stock'         => 2,
            'lot_size'      => 1,
            'created_at'    => '2019-05-12 07:50:00',
            'updated_at'    => NULL
        ]);
    }
}
