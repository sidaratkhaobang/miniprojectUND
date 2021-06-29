<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_add extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'career',
        'sex',
        'dateB',
    ];
}
