<?php

use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_types')->insert([
            'type_id'   => 1,
            'name'      => 'Standard Type (CEM)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 2,
            'name'      => 'Long Type (CEM)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 3,
            'name'      => 'Standard Type (CBN)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 4,
            'name'      => 'Long Type (CBN)',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 5,
            'name'      => 'Straight Shank',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 6,
            'name'      => 'Taper Shank',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 7,
            'name'      => 'Hand Reamer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 8,
            'name'      => 'Machine Reamer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 9,
            'name'      => 'Hand Tap',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 10,
            'name'      => 'Machine Tap',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 11,
            'name'      => '2-Flutes',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('product_types')->insert([
            'type_id'   => 12,
            'name'      => '4-Flutes',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
