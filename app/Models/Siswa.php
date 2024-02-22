<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'data_siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'tgl_lahir',
        'tempat_lahir',
        'email',
        'no_telp',
        'nisn',
        'kelas',
        'predikat',
        'predikat_sikap',
        'kehadiran',
        'foto',
    ];
}
