<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicleModel extends Model
{
    use HasFactory;
    protected $table = 'vehicle_stamps_tabel';
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
        'seller_office_name',
        'seller_address',
        'seller_commission_amount',
        'seller_final_price_of_vehicle',
        'seller_vehicle_name',
        'seller_vehicle_Model',
        'seller_registration_no',
        'seller_chasis_no',
        'seller_engine_no',
        'seller_horse_power',
        'seller_vehicle_condition',
        'seller_signature',
        /////// start for buyer
        'buyer_name',
        'buyer_Phone',
        'buyer_cnic',
        'buyer_address',
        'buyer_signature',
        'created_at',
    ];
}
