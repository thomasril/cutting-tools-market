<?php

use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_types')->insert([
            'type_id'   => 1,
            'name'      => 'Standard Type',
            'full_name' => 'Carbide End Mill (Standard Type)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 2,
            'name'      => 'Long Type',
            'full_name' => 'Carbide End Mill (Long Type)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 3,
            'name'      => 'Standard Type',
            'full_name' => 'Carbide Ball Nose (Standard Type)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 4,
            'name'      => 'Long Type',
            'full_name' => 'Carbide Ball Nose (Long Type)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 5,
            'name'      => 'Straight Shank',
            'full_name' => 'Drill (Straight Shank)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 6,
            'name'      => 'Taper Shank',
            'full_name' => 'Drill (Taper Shank)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 7,
            'name'      => 'Hand Reamer',
            'full_name' => 'Reamer (Hand Reamer)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 8,
            'name'      => 'Machine Reamer',
            'full_name' => 'Reamer (Machine Reamer)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 9,
            'name'      => 'Hand Tap',
            'full_name' => 'Tap (Hand Tap)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 10,
            'name'      => 'Machine Tap',
            'full_name' => 'Tap (Machine Tap)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 11,
            'name'      => '2-Flutes',
            'full_name' => 'Flutes (2-Flutes)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 12,
            'name'      => '4-Flutes',
            'full_name' => 'Flutes (4-Flutes)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
