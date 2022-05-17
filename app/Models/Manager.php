<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $fillable = [
        'pm_name',
        'pm_fname',
        'pm_sex',
        'pm_brithdate',
        'pm_email',
        'pm_phone'
        ];
}
