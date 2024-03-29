<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DumyKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasData =[
            [
            'user_id' => '1',
            'nama_kelas' => 'MTK XI PPLG 1',
            'subJudul' => 'Project P5 - Tugas Kreatif',
            'kelas' => 'XI PPLG 1',
            'jadwal' => 'Monday',
            'mulai_pembelajaran' => '07:00:00',
            'berakhir' => '09:00:00',
            ],
            [
            'user_id' => '1',
            'nama_kelas' => 'IPA XI PPLG 1',
            'subJudul' => 'Project P5 - kerja',
            'kelas' => 'XI PPLG 1',
            'jadwal' => "Monday",
            'mulai_pembelajaran' => '09:00:00',
            'berakhir' => '12:00:00',
            ],
            [
            'user_id' => '1',
            'nama_kelas' => 'MTK X PPLG 2',
            'subJudul' => 'Project P5 - Tugas Kreatif',
            'kelas' => 'XI PPLG 2',
            'mulai_pembelajaran' => '07:00:00',
            'berakhir' => '09:00:00',
            ],
            [
            'user_id' => '1',
            'nama_kelas' => 'MTK X PPLG 1',
            'subJudul' => 'Project P5 - Tugas Kreatif',
            'kelas' => 'X PPLG 1',
            'mulai_pembelajaran' => '07:00:00',
            'berakhir' => '09:00:00',
            ],
            ];
            foreach($kelasData as $item => $val){
                Kelas::create($val);
            }
    }
}
