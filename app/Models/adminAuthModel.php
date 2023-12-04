<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminAuthModel extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = [
                "id",
                "image",
                "name",
                "email",
                "password",
                "created_at",
                "updated_at"
    ];
}
