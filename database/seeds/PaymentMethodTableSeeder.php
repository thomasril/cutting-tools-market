<?php

use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('payment_methods')->insert([
            'payment_method_id' => 1,
            'name'              => 'Bank Transfer',
            'account_name'      => 'PT Dirgaraya Harsa',
            'account_number'    => '179 3000 573',
            'created_at'        => '2019-05-12 07:50:00',
            'updated_at'        => NULL
        ]);

        DB::table('payment_methods')->insert([
            'payment_method_id' => 2,
            'name'              => 'Giro',
            'account_name'      => 'PT Dirgaraya Harsa',
            'account_number'    => '179 3000 573',
            'created_at'        => '2019-05-12 07:50:00',
            'updated_at'        => NULL
        ]);
    }
}
