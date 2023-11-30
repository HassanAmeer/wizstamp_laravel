<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wizUsersModel extends Model
{
    use HasFactory;
    protected $table = 'wizallusers';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'city',
        'address',
        'image',
        'password',
        'created_at',
    ];
}
