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
            'name' => '2 mm Carbide End Mill',
            'price' => 91000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '804100',
            'category_id' => 2,
            'name' => '8 x 100 mm Carbide End Mill',
            'price' => 352000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '40204',
            'category_id' =>3,
            'name' => '4 mm Carbide End Nose',
            'price' => 142000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('products')->insert([
            'product_id' => '1202100',
            'category_id' =>4,
            'name' => '12 x 100 mm Carbide End Nose',
            'price' => 725000,
            'stock' => 10,
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
