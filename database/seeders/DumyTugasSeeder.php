<?php

namespace Database\Seeders;

use App\Models\Tugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DumyTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tugasData =[
            [
            'kelas_id' => 1,
            'nama_tugas' => 'Aljabar',
            'deskripsi_tugas' => 'Membuat Cara',
            'status_tugas' => 'belum_selesai',
            'tenggat_waktu' => '2024-02-22 17:57:00'
            ],
            [
            'kelas_id' => 2,
            'nama_tugas' => 'Aljabar',
            'deskripsi_tugas' => 'Membuat Cara Kerja',
            'status_tugas' => 'belum_selesai',
            'tenggat_waktu' => '2024-02-22 18:57:00'
            ],
            ];
        foreach($tugasData as $item => $val){
            Tugas::create($val);
        }
    }
}
