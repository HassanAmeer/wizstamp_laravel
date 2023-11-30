<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('electronics_stamps_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('wizid')->nullable()->default('electronics_786'); 
            $table->string('is_done_by_seller')->nullable()->default('0'); // 0 means no // 1 means yes 
            $table->string('is_done_by_buyer')->nullable()->default('0'); // 0 means no // 1 means yes 
            $table->string('is_locked')->nullable()->default('0'); // 0 means no // 1 means yes 
            $table->string('type')->nullable()->default('seller'); // seller or buyer
            $table->string('seller_name')->nullable()->default('Qasim'); 
            $table->string('seller_phone')->nullable()->default('0301234567'); 
            $table->string('seller_cnic')->nullable()->default('00000000000'); 
            $table->string('seller_device_name')->nullable()->default('OfficeName ABC');
            $table->string('seller_device_model')->nullable()->default('OfficeName ABC');
            $table->string('seller_device_final_price')->nullable()->default('00.0'); 
            $table->string('guarantee_duration')->nullable()->default('0'); 
            $table->string('seller_shop_name')->nullable()->default('ABC'); 
            $table->string('seller_shop_address')->nullable()->default('ABC'); 
            $table->string('seller_device_condition')->nullable()->default('0'); 
            $table->string('seller_signature')->nullable()->default('icons/notfound.png'); 
            ///// buyer start 
            $table->string('buyer_name')->nullable()->default('Name ABC'); 
            $table->string('buyer_Phone')->nullable()->default('000000000'); 
            $table->string('buyer_cnic')->nullable()->default('000000000'); 
            $table->string('buyer_address')->nullable()->default('Address ABC'); 
            $table->string('buyer_signature')->nullable()->default('icons/notfound.png');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
