<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenMuc extends Model
{
    use HasFactory;
    protected $table = 'tao_bang';
    protected $fillable = [
        'ten',
        'mo_ta'
    ];
}
