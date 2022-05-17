<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custemer extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'c_lname',
        'c_fname',
        'c_sxe',
        'c_brithdate',
        'c_email',
        'c_phone'
        ];
}
