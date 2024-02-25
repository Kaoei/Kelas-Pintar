<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'tugas_id','pengumpulans_id', 'nilai'];
    public $table = 'nilai';
         public function user(){
         return $this->belongsToMany(User::class);
     }
     public function Tugas(){
         return $this->belongsToMany(Tugas::class);
     }
     public function pengumpulan(){
         return $this->belongsTo(pengumpulan::class);
     }
    
}
