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
            'id'   =>  1,
            'name'      => '',
            'email'     => '',
            'phone'     => '',
            'address'   => '',
            'username'  => 'admin',
            'password'  => 'admin123',
            'role'      => 'Finance manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  2,
            'name'      => 'Boen Harsono',
            'email'     => 'harsa@centrin.net.id',
            'phone'     => '0818-0607-0814',
            'address'   => 'Jl. Sawah Lio No. 17 Jakarta Barat 11250',
            'username'  => 'boen16',
            'password'  => 'bh0111',
            'role'      => 'Finance manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   => 3,
            'name'      => 'Rian Susilo',
            'email'     => 'riansusilo@gmail.com',
            'phone'     => '0896-7759-8696',
            'address'   => 'Jl. Tanah Sereal 18 No. 30 Jakarta Barat 11210',
            'username'  => 'rian23',
            'password'  => 'ri0206',
            'role'      => 'Procurement manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  4,
            'name'      => 'Liliana Harsono',
            'email'     => 'lilianah65@gmail.com',
            'phone'     => '0816-1607-006',
            'address'   => 'Jl. Jelambar Madya III Blok C3 No. 800 Jakarta Barat 11460',
            'username'  => 'lili06',
            'password'  => 'lh0301',
            'role'      => 'Logistic manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   => 5,
            'name'      => 'Mochtar Kiki',
            'email'     => 'kikim09@gmail.com',
            'phone'     => '0857-9380-0486',
            'address'   => 'Jl. Duri Selatan 6 No. 21A Jakarta Barat 11270',
            'username'  => 'moch09',
            'password'  => 'mk0410',
            'role'      => 'Sales manager',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  6,
            'name'      => 'Boen Harsono',
            'email'     => 'harsa@centrin.net.id',
            'phone'     => '0818-0607-0814',
            'address'   => 'Jl. Sawah Lio No. 17 Jakarta Barat 11250',
            'username'  => 'boen65',
            'password'  => 'bh0112',
            'role'      => 'Director',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  7,
            'name'      => 'PT. Presisi Cileungsi Makmur',
            'email'     => 'injection-pcl@presisigrup.com',
            'phone'     => '(021) 5890-2001',
            'address'   => 'Wisma Presisi, Lantai 8 Jl. Taman Aries Blok A1 No. 1 Meruya Utara, Kembangan, Jakarta Barat 11620',
            'username'  => 'presisi001',
            'password'  => 'pcm2001',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  8,
            'name'      => 'PT. Inti Pantja Press Industri',
            'email'     => 'maratur@isuzu.astra.co.id',
            'phone'     => '(021) 887-9990',
            'address'   => 'Jl. Kali Abang No. 1 Pondok Ungu, Bekasi, Jawa Barat Indonesia PO. BOX 323',
            'username'  => 'intipan002',
            'password'  => 'ipp9990',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   => 9,
            'name'      => 'PT. Jakarta Akuratama Plastik',
            'email'     => 'japoperation@jap.com',
            'phone'     => '(021) 619-4338',
            'address'   => 'Jl. Mangga Ubi No. 77 Kapuk Jagal, Jakarta 11720, Indonesia',
            'username'  => 'jakarta003',
            'password'  => 'jap4338',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  10,
            'name'      => 'PT. Moldpia',
            'email'     => 'rinni@moldpia.com',
            'phone'     => '(021) 890-4146',
            'address'   => 'Jl. Jababeka XVII-D Blok U No. 30-C Gandasari Jawa Barat, Telaga Asih, Cikarang Barat Bekasi, Jawa Barat 17530',
            'username'  => 'moldpia004',
            'password'  => 'mol4146',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  11,
            'name'      => 'PT. Musashi Auto Parts Indonesia',
            'email'     => 'procurement@musashi.co.id',
            'phone'     => '(021) 897-0866',
            'address'   => 'EJIP Industrial Park Plot 3J-2 Cikarang Selatan, Bekasi 17550 Indonesia',
            'username'  => 'musashi005',
            'password'  => 'map0866',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  12,
            'name'      => 'PT. Katsushiro Indonesia',
            'email'     => 'procurementki@katsushiro.co.id',
            'phone'     => '( 021) 893-4953',
            'address'   => 'Kawasan Industri Jababeka Tahap 1 Blok I Jalan Jababeka XII, Cikarang, Harja Mekar Cikarang Utara, Bekasi, Jawa Barat 17530',
            'username'  => 'katsush006',
            'password'  => 'kat4953',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  13,
            'name'      => 'PT. Presisi Cimanggis Makmur',
            'email'     => 'injection-pcm@presisigrup.com',
            'phone'     => '(021) 873-1438',
            'address'   => 'Jl. Radar Auri No. 61-63 Cisalak Ps., Cimanggis, Kota Depok Jawa Barat 16454',
            'username'  => 'presisi007',
            'password'  => 'pcm1438',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  14,
            'name'      => 'PT. Dharma Precision Tools',
            'email'     => 'ali.susilo@dpt.dharmap.com',
            'phone'     => '(021) 897-2312',
            'address'   => 'Bekasi Internationall Industrial Estate - Hyundai Jl. Inti Raya Blok C3 No.12 Lemah Abang Bekasi, Jawa Barat 17550',
            'username'  => 'dharmap008',
            'password'  => 'dpt2312',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  15,
            'name'      => 'PT. Gemala Kempa Daya',
            'email'     => 'andin@gkd-astra.co.id',
            'phone'     => '(0211) 460-2755',
            'address'   => 'Jl. Pegangsaan Dua Km 1.6 Kelapa Gading, Jakarta 14250',
            'username'  => 'gemalak009',
            'password'  => 'gkd2755',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  16,
            'name'      => 'Bengkel Dikari Jaya',
            'email'     => 'bkdikarijaya@gmail.com',
            'phone'     => '(021) 5574-3458',
            'address'   => 'Jl. Irigasi Kp. Gn., CipondohKota Tangerang, Banten 15148',
            'username'  => 'bengkel010',
            'password'  => 'bdj3458',
            'role'      => 'Customer',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  17,
            'name'      => 'Lasting Victory',
            'email'     => 'yuanjiun@ms49.hinet.net',
            'phone'     => '886-4-2350-9999',
            'address'   => 'No.40, Gonyequ 34th Rd. Xitun District, Taichung, 40768, Taiwan',
            'username'  => '',
            'password'  => '',
            'role'      => 'Supplier',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);

        DB::table('users')->insert([
            'id'   =>  18,
            'name'      => 'M&V',
            'email'     => 'sales@mav.cz',
            'phone'     => '00420-571-484-853',
            'address'   => '4. května 288755 01 VSETÍN',
            'username'  => '',
            'password'  => '',
            'role'      => 'Supplier',
            'created_at'=> '2019-05-12 07:50:00',
            'updated_at'=> NULL
        ]);
    }
}
