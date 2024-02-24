<?php

namespace Database\Seeders;

use App\Models\data_siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DumyDataSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->string('email');
        // $table->bigInteger('no_telp');
        // $table->bigInteger('nisn');
        // $table->string('kelas');
        // $table->bigInteger('predikat')->nullable();
        // $table->bigInteger('predikat_sikap')->nullable();
        // $table->enum('kehadiran', ['hadir','izin','sakit','alpa'])->default('alpa');
        // $table->text('foto')->nullable();
        // $table->timestamps();
        $kelasData =[
            [
            'user_id' => '2',
            'nama' => 'william keane',
            'umur' => '16',
            'jenis_kelamin' => 'laki-laki',
            'tgl_lahir' => '2007-04-12',
            'tempat_lahir' => 'jakarta',
            'email' => 'williamkeanekeane@gmail.com',
            'no_telp' => '081282059789',
            'nisn' => '123456',
            'kelas' => 'XI PPLG 1',
            ],
            ];
            foreach($kelasData as $item => $val){
                data_siswa::create($val);
            }
    }
}
