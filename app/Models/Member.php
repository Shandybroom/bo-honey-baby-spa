<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_hp',
        'nama',
        'alamat',
        'email',
        'point'
    ];

    protected $primaryKey = 'no_hp';

}
