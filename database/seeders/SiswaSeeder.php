<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            [
                'nama' => 'Nawang Alan Andrian',
                'tanggal_lahir' => '2006-09-20',
                'jurusan' => 'Sistem Informasi',
                'nilai' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Anggraini',
                'tanggal_lahir' => '2007-02-15',
                'jurusan' => 'Teknik Informatika',
                'nilai' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rafi Pratama',
                'tanggal_lahir' => '2006-11-10',
                'jurusan' => 'Manajemen Informatika',
                'nilai' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('siswa')->insert($siswa);
    }
}
