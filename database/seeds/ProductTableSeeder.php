<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_id' => '20403',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '2 mm Carbide End Mill',
            'price' => 91000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '30403',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '3 mm Carbide End Mill',
            'price' => 91000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '40406',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '4 mm Carbide End Mill',
            'price' => 91000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '50406',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '5 mm Carbide End Mill',
            'price' => 127000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '60406',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '6 mm Carbide End Mill',
            'price' => 127000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '80408',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '8 mm Carbide End Mill',
            'price' => 236000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '100410',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '10 mm Carbide End Mill',
            'price' => 358000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '120412',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '12 mm Carbide End Mill',
            'price' => 471000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '160416',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '16 mm Carbide End Mill',
            'price' => 1295000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '200420',
            'category_id' =>1,
            'type_id'=>1,
            'name' => '20 mm Carbide End Mill',
            'price' => 1555000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '404100',
            'category_id' =>1,
            'type_id'=>2,
            'name' => '4 X 100 mm Carbide End Mill',
            'price' => 243000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '604100',
            'category_id' =>1,
            'type_id'=>2,
            'name' => '6 X 100 mm Carbide End Mill',
            'price' => 243000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '804100',
            'category_id' =>1,
            'type_id'=> 2,
            'name' => '8 X 100 mm Carbide End Mill',
            'price' => 352000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Carbide Ball Nose (Standard Type)
        DB::table('products')->insert([
            'product_id' => '40204',
            'category_id' =>2,
            'type_id'=> 3,
            'name' => '4 mm Carbide End Nose',
            'price' => 142000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Carbide Ball Nose (Long Type)
        DB::table('products')->insert([
            'product_id' => '1202100',
            'category_id' =>2,
            'type_id'=> 4,
            'name' => '12 x 100 mm Carbide End Nose',
            'price' => 725000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Drill (Straight Shank)
        DB::table('products')->insert([
            'product_id' => 'LN01',
            'category_id' =>3,
            'type_id'=> 5,
            'name' => '1 mm Straight Shank Drill',
            'price' => 80200,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => 'LN20',
            'category_id' =>3,
            'type_id'=> 5,
            'name' => '20 mm Straight Shank Drill',
            'price' => 1053000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Drill (Straight Shank)
        DB::table('products')->insert([
            'product_id' => 'LT20',
            'category_id' =>3,
            'type_id'=> 6,
            'name' => '20 mm Taper Shank Drill',
            'price' => 510000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Reamer (Hand)
        DB::table('products')->insert([
            'product_id' => '40010',
            'category_id' =>4,
            'type_id'=> 7,
            'name' => '10 mm Hand Reamer',
            'price' => 360000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '40011',
            'category_id' =>4,
            'type_id'=> 7,
            'name' => '11 mm Hand Reamer',
            'price' => 406500,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Reamer (Machine)
        DB::table('products')->insert([
            'product_id' => '42810',
            'category_id' =>4,
            'type_id'=> 8,
            'name' => '10 mm Machine Reamer',
            'price' => 277000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Tap (Hand)
        DB::table('products')->insert([
            'product_id' => '15140700',
            'category_id' =>5,
            'type_id'=> 9,
            'name' => 'M4 x 0.7 mm Hand Tap',
            'price' => 206000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // Tap (Machine)
        DB::table('products')->insert([
            'product_id' => '15540700',
            'category_id' =>5,
            'type_id'=> 10,
            'name' => 'M4 x 0.7 mm Machine Tap',
            'price' => 97500,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // HSS End Mill (2-Flute)
        DB::table('products')->insert([
            'product_id' => '623002',
            'category_id' =>6,
            'type_id'=> 11,
            'name' => '2 mm 2 flute HSS End Mill',
            'price' => 128000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        // HSS End Mill (4-Flute)
        DB::table('products')->insert([
            'product_id' => '621002',
            'category_id' =>6,
            'type_id'=> 12,
            'name' => '2 mm 4 flute HSS End Mill',
            'price' => 142000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
