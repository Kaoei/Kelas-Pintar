<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $fillable = ['kelas_id','nama_tugas', 'deskripsi_tugas','status_tugas','tenggat_waktu'];
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
