<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductTypeTableSeeder::class);
        $this->call(ProductPictureTableSeeder::class);
        $this->call(ProductTableSeeder::class);
    }
}
