<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store_keeper extends Model
{
    use HasFactory;
    protected $fillable = [
        
        's_lname',
        's_sex',
        's_brithdate',
        's_email',
        's_phone'
        ];
}
