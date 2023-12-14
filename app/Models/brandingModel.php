<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandingModel extends Model
{
    use HasFactory;
    protected $table = 'branding';
    protected $fillable = [
                "id",
                "user_id",
                "bussiness_logo",
                "bussiness_name",
                "bussiness_email",
                "bussiness_phone",
                "plan_type",
                "plan_name",
                "plan_duration",
                "is_paid",
                "pay_by",
                "total",
                "is_active",
    ];
}
