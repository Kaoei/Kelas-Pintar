<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            [
                'nis' => '123',
                'nama' => 'fahmi',
            ],
            [
                'nis' => '124',
                'nama' => 'rizki',
            ]
        ];

        siswa::insert($siswa);
    }
}
