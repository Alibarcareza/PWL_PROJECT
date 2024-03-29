<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'level' => 'admin',
                'notelp' => '0895630543858',
                'alamat' => 'Malang',
                'foto' => 'admin.jpg',
                'fotoKTP' => 'admin.jpg',
                'password' => bcrypt('admin123'),
                'created_at' => now(),
            ],

            [
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'level' => 'user',
                'notelp' => '08956305431276',
                'alamat' => 'Malang',
                'foto' => 'admin.jpg',
                'fotoKTP' => 'admin.jpg',
                'password' => bcrypt('ali123'),
                'created_at' => now(),
            ]
        ]);
    }
}
