<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chat';
    protected $primaryKey = 'id_chat';
    protected $fillable = ['user_id', 'forum', 'message'];
    public function user(){
        return $this->hasOne(User::class);
    }
}
