<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settinsModel extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        "doc_expire_time",
    ];
}
