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
        DB::table('users')->insert([
            'id' => 20403,
            'type' => 'Standard Type',
            'category' =>'Carbide End Mill',
            'name' => '2 mm Carbide End Mill',
            'price' => 91000,
            'stock' => 10,
            'material' => 'Carbide',
            'flutes' => '4-Flute',
            'coating' => 'Extreme coated',
            'hardness' => 'HRC 45',
            'picture' => 'testing',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id' => 804100,
            'type' => 'Long Type',
            'category' =>'Carbide End Mill',
            'name' => '8 x 100 mm Carbide End Mill',
            'price' => 352000,
            'stock' => 10,
            'material' => 'Carbide',
            'flutes' => '4-Flute',
            'coating' => 'Extreme coated',
            'hardness' => 'HRC 45',
            'picture' => 'testing',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id' => 40204,
            'type' => 'Standard Type',
            'category' =>'Carbide End Nose',
            'name' => '4 mm Carbide End Nose',
            'price' => 142000,
            'stock' => 10,
            'material' => 'Carbide',
            'flutes' => '2-Flutes',
            'coating' => 'Extreme coated',
            'hardness' => 'HRC 45',
            'picture' => 'testing',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id' => 1202100,
            'type' => 'Long Type',
            'category' =>'Carbide End Nose',
            'name' => '12 x 100 mm Carbide End Nose',
            'price' => 725000,
            'stock' => 10,
            'material' => 'Carbide',
            'flutes' => '2-Flutes',
            'coating' => 'Extreme coated',
            'hardness' => 'HRC 45',
            'picture' => 'testing',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
