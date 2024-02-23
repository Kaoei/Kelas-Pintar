<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumpulan extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'tugas_id','file','tgl_pengumpulan','status_pengumpulan','status_nilai'];
    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function Tugas(){
        return $this->belongsTo(Tugas::class);
    }
}
