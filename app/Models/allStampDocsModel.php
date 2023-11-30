<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allStampDocsModel extends Model
{
    use HasFactory;
    protected $table = 'all_stamps_docs';
    protected $fillable = [
        'id',
        'wizid',
        'user_id',
        'islocked',
        'doc_type',
        'seller_name',
        'form_creation_time',
        'seller_submit_time',
        'seller_doc',
        'buyer_name',
        'buyer_doc',
        'buyer_submit_time',
    ];
    
}
