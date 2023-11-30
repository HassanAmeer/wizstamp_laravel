<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class electronicsModel extends Model
{
    use HasFactory;
    protected $table = 'electronics_stamps_tabel';
    protected $fillable = [
        'id',
        'wizid',
        'is_done_by_seller',
        'is_done_by_buyer',
        'is_locked',
        'type',
        'seller_name', 
        'seller_phone', 
        'seller_cnic', 
        'seller_device_name', 
        'seller_device_model', 
        'seller_device_final_price', 
        'guarantee_duration', 
        'seller_shop_name', 
        'seller_shop_address', 
        'seller_device_condition', 
        'seller_signature', 
        ////// buyer fields
        'buyer_name',
        'buyer_Phone',
        'buyer_cnic',
        'buyer_address',
        'buyer_signature',
        'created_at',

    ];
}
