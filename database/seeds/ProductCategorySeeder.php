<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => 'Standard Type',
            'category' => 'Carbide End Mill',
            'material' => 'Carbide',
            'flutes' => '4-Flute',
            'coating' => 'Extreme coated',
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => 'Long Type',
            'category' => 'Carbide End Mill',
            'material' => 'Carbide',
            'flutes' => '4-Flute',
            'coating' => 'Extreme coated',
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'Carbide End Nose',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'Drill',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'Drill',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'Reamer',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);


        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'Reamer',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'Tap',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'Tap',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'HSS End Mill',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 1,
            'type' => '',
            'category' => 'HSS End Mill',
            'flutes' => '',
            'coating' => ,
            'hardness' => '',
            'picture' => '',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

    }
}
