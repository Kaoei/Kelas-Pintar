<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlights extends Model
{
    use HasFactory;
    protected $table = 'highlights';
    protected $primaryKey = 'id_highlights';
    protected $fillable = ['user', 'text'];
}
