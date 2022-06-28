<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataAlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_alat')->insert([
            [
                'nama' => 'carrier 60L',
                'kategori' => 'Gunung Rimba',
                'merk' => 'consina',
                'jumlah' => '5',
                'gambar' =>'assets/img/alat/alat1.jpg',
            ],
            [
                'nama' => 'carrier 80L',
                'kategori' => 'Gunung Rimba',
                'merk' => 'eiger',
                'jumlah' => '4',
                'gambar' =>'assets/img/alat/alat2.jpg',
            ]
        ]);
    }
}
