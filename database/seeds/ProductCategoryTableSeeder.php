<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_categories')->insert([
            'category_id'=> 1,
            'supplier_id'=> 17,
            'name'      => 'Carbide End Mill',
            'material'  => 'Carbide',
            'flutes'    => '4-Flute',
            'coating'   => 'Extreme coated',
            'hardness'  => 'HRC 45',
            'picture'   => 'Carbide End Mill.jpeg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id'=> 2,
            'supplier_id'=> 17,
            'name'      => 'Carbide Ball Nose',
            'material'  => 'Carbide',
            'flutes'    => '2-Flute',
            'coating'   => 'Extreme coated',
            'hardness'  => 'HRC 45',
            'picture'   => 'Carbide Ball Nose.jpeg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 3,
            'supplier_id'=> 18,
            'name'      => 'Drill',
            'material'  => 'High-Speed Steel (HSS)',
            'flutes'    => NULL,
            'coating'   => NULL,
            'hardness'  => NULL,
            'picture'   => 'Drill.jpeg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 4,
            'supplier_id'=> 18,
            'name'      => 'Reamer',
            'material'  => 'High-Speed Steel (HSS)',
            'flutes'    => 'Straight Flute',
            'coating'   => NULL,
            'hardness'  => NULL,
            'picture'   => 'Reamer.jpeg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 5,
            'supplier_id'=> 18,
            'name'      => 'Tap',
            'material'  => 'High-Speed Steel (HSS)',
            'flutes'    => NULL,
            'coating'   => NULL,
            'hardness'  => NULL,
            'picture'   => 'Tap.jpeg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_categories')->insert([
            'category_id' => 6,
            'supplier_id'=> 18,
            'name'      => 'HSS End Mill',
            'material'  => 'Cobalt High-Speed Steel (HSS)',
            'flutes'    => '2-Flutes and 4 Flutes',
            'coating'   => NULL,
            'hardness'  => NULL,
            'picture'   => 'HSS End Mill.jpeg',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
