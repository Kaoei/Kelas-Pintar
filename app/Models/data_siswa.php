<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = 'data_siswa';

    public function user(){
        return $this->belongsTo(user::class);
    }
}
