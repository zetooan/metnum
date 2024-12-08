<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hitung extends Model
{
    protected $fillable = [
        'id_user',
        'id_up',
        'b1',
        'b2',
        'b3',
        'p1',
        'p2',
        'p3',
        'comment',
    ];
}
