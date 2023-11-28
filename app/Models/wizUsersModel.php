<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wizUsersModel extends Model
{
    use HasFactory;
    protected $table = 'wizusers';
    protected $fillable = [
        'name',
        'phone',
        'city',
        'address',
        'image',
    ];
}
