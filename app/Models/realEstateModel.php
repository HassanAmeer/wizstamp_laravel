<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class realEstateModel extends Model
{
    use HasFactory;
    protected $table = 'real_estate_stamps_tabel';
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
        'seller_business_Address',
        'seller_office_name',
        'seller_commission_amount',
        'seller_final_price_of_property',
        'security',
        'monthly_rent',
        'seller_plot_number',
        'seller_block',
        'seller_sector',
        'seller_phase',
        'seller_society_name',
        'seller_city',
        'seller_zipcode',
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
