<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DumyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
            'nama' => 'Guru',
            'umur' => '15',
            'role' => 'guru',
            'password' => 'guru123'
            ],
            [
            'nama' => 'Murid 1',
            'kelas' => 'XI PPLG 1',
            'umur' => '15',
            'role' => 'murid',
            'password' => 'murid1'
            ],
            [
            'nama' => 'Murid 2',
            'kelas' => 'X PPLG 1',
            'umur' => '15',
            'role' => 'murid',
            'password' => 'murid2'
            ],
            [
            'nama' => 'Murid 3',
            'kelas' => 'XI PPLG 2',
            'umur' => '15',
            'role' => 'murid',
            'password' => 'murid2'
            ]
        ];

        foreach($userData as $item => $val){
            User::create($val);
        }
    }
}
