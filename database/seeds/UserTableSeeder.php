<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'        =>  1,
            'name'      => '',
            'email'     => '',
            'phone'     => '',
            'address'   => '',
            'username'  => 'admin',
            'password'  => 'admin123',
            'initial'   => 'ADM',
            'role'      => 'Admin',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  2,
            'name'      => 'Boen Harsono',
            'phone'     => '0818-0607-0814',
            'address'   => 'Jl. Sawah Lio No. 17 Jakarta Barat 11250',
            'email'     => 'harsa@centrin.net.id',
            'username'  => 'boen16',
            'password'  => 'bh0111',
            'initial'   => NULL,
            'role'      => 'Finance Manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        => 3,
            'name'      => 'Rian Susilo',
            'phone'     => '0896-7759-8696',
            'address'   => 'Jl. Tanah Sereal 18 No. 30 Jakarta Barat 11210',
            'email'     => 'riansusilo@gmail.com',
            'username'  => 'rian23',
            'password'  => 'ri0206',
            'initial'   => NULL,
            'role'      => 'Procurement Manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  4,
            'name'      => 'Liliana Harsono',
            'phone'     => '0816-1607-006',
            'address'   => 'Jl. Jelambar Madya III Blok C3 No. 800 Jakarta Barat 11460',
            'email'     => 'lilianah65@gmail.com',
            'username'  => 'lili06',
            'password'  => 'lh0301',
            'initial'   => NULL,
            'role'      => 'Logistic Manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        => 5,
            'name'      => 'Mochtar Kiki',
            'phone'     => '0857-9380-0486',
            'address'   => 'Jl. Duri Selatan 6 No. 21A Jakarta Barat 11270',
            'email'     => 'kikim09@gmail.com',
            'username'  => 'moch09',
            'password'  => 'mk0410',
            'initial'   => NULL,
            'role'      => 'Sales Manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  6,
            'name'      => 'Boen Harsono',
            'phone'     => '0818-0607-0814',
            'address'   => 'Jl. Sawah Lio No. 17 Jakarta Barat 11250',
            'email'     => 'harsa@centrin.net.id',
            'username'  => 'boen65',
            'password'  => 'bh0112',
            'initial'   => NULL,
            'role'      => 'Director',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  7,
            'name'      => '',
            'phone'     => '',
            'address'   => '',
            'email'     => '',
            'username'  => 'presisi001',
            'password'  => 'pcm2001',
            'initial'   => 'PCM',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  8,
            'name'      => '',
            'email'     => '',
            'phone'     => '',
            'address'   => '',
            'username'  => 'intipan002',
            'password'  => 'ipp9990',
            'initial'   => 'IPPI',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        => 9,
            'name'      => 'PT. Jakarta Akuratama Plastik',
            'phone'     => '(021) 619-4338',
            'address'   => 'Jl. Mangga Ubi No. 77 Kapuk Jagal, Jakarta 11720, Indonesia',
            'email'     => 'japoperation@jap.com',
            'username'  => 'jakarta003',
            'password'  => 'jap4338',
            'initial'   => 'JAP',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  10,
            'name'      => 'PT. Moldpia',
            'phone'     => '(021) 890-4146',
            'address'   => 'Jl. Jababeka XVII-D Blok U No. 30-C Gandasari Jawa Barat, Telaga Asih, Cikarang Barat Bekasi, Jawa Barat 17530',
            'email'     => 'rinni@moldpia.com',
            'username'  => 'moldpia004',
            'password'  => 'mol4146',
            'initial'   => 'MOL',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  11,
            'name'      => 'PT. Musashi Auto Parts Indonesia',
            'phone'     => '(021) 897-0866',
            'address'   => 'EJIP Industrial Park Plot 3J-2 Cikarang Selatan, Bekasi 17550 Indonesia',
            'email'     => 'procurement@musashi.co.id',
            'username'  => 'musashi005',
            'password'  => 'map0866',
            'initial'   => 'MAPI',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  12,
            'name'      => 'PT. Katsushiro Indonesia',
            'email'     => 'procurementki@katsushiro.co.id',
            'phone'     => '( 021) 893-4953',
            'address'   => 'Kawasan Industri Jababeka Tahap 1 Blok I Jalan Jababeka XII, Cikarang, Harja Mekar Cikarang Utara, Bekasi, Jawa Barat 17530',
            'username'  => 'katsush006',
            'password'  => 'kat4953',
            'initial'   => 'KI',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  13,
            'name'      => 'PT. Presisi Cimanggis Makmur',
            'phone'     => '(021) 873-1438',
            'address'   => 'Jl. Radar Auri No. 61-63 Cisalak Ps., Cimanggis, Kota Depok Jawa Barat 16454',
            'email'     => 'injection-pcm@presisigrup.com',
            'username'  => 'presisi007',
            'password'  => 'pcm1438',
            'initial'   => 'PCMM',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  14,
            'name'      => 'PT. Dharma Precision Tools',
            'phone'     => '(021) 897-2312',
            'address'   => 'Bekasi Internationall Industrial Estate - Hyundai Jl. Inti Raya Blok C3 No.12 Lemah Abang Bekasi, Jawa Barat 17550',
            'email'     => 'ali.susilo@dpt.dharmap.com',
            'username'  => 'dharmap008',
            'password'  => 'dpt2312',
            'initial'   => 'DPT',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  15,
            'name'      => 'PT. Gemala Kempa Daya',
            'phone'     => '(0211) 460-2755',
            'address'   => 'Jl. Pegangsaan Dua Km 1.6 Kelapa Gading, Jakarta 14250',
            'email'     => 'andin@gkd-astra.co.id',
            'username'  => 'gemalak009',
            'password'  => 'gkd2755',
            'initial'   => 'GKD',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'        =>  16,
            'name'      => 'Bengkel Dikari Jaya',
            'phone'     => '(021) 5574-3458',
            'address'   => 'Jl. Irigasi Kp. Gn., CipondohKota Tangerang, Banten 15148',
            'email'     => 'bkdikarijaya@gmail.com',
            'username'  => 'bengkel010',
            'password'  => 'bdj3458',
            'initial'   => 'BDJ',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  17,
            'name'      => 'Lasting Victory',
            'phone'     => '886-4-2350-9999',
            'address'   => 'No.40, Gonyequ 34th Rd. Xitun District, Taichung, 40768, Taiwan',
            'email'     => 'yuanjiun@ms49.hinet.net',
            'username'  => '',
            'password'  => '',
            'initial'   => NULL,
            'role'      => 'Supplier',
            'initial'   => 'LV',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  18,
            'name'      => 'M&V',
            'phone'     => '00420-571-484-853',
            'address'   => '4. května 288755 01 VSETÍN',
            'email'     => 'sales@mav.cz',
            'username'  => '',
            'password'  => '',
            'initial'   => NULL,
            'role'      => 'Supplier',
            'initial'   => 'MV',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
