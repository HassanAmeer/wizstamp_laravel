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
        Schema::create('vehicle_stamps_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('wizid')->nullable()->default('vechile_786'); 
            $table->string('is_done_by_seller')->nullable()->default('0'); // 0 means no // 1 means yes 
            $table->string('is_done_by_buyer')->nullable()->default('0'); // 0 means no // 1 means yes 
            $table->string('is_locked')->nullable()->default('0'); // 0 means no // 1 means yes 
            $table->string('type')->nullable()->default('seller'); // seller or buyer
            $table->string('seller_name')->nullable()->default('Qasim'); 
            $table->string('seller_phone')->nullable()->default('0301234567'); 
            $table->string('seller_cnic')->nullable()->default('00000000000'); 
            $table->string('seller_office_name')->nullable()->default('OfficeName ABC');
            $table->string('seller_address')->nullable()->default('Address'); 
            $table->string('seller_commission_amount')->nullable()->default('0'); 
            $table->string('seller_final_price_of_vehicle')->nullable()->default('0'); 
            $table->string('seller_vehicle_name')->nullable()->default('ABC'); 
            $table->string('seller_vehicle_Model')->nullable()->default('ABC0'); 
            $table->string('seller_registration_no')->nullable()->default('0'); 
            $table->string('seller_chasis_no')->nullable()->default('0'); 
            $table->string('seller_engine_no')->nullable()->default('ABC'); 
            $table->string('seller_horse_power')->nullable()->default('ABC'); 
            $table->string('seller_vehicle_condition')->nullable()->default('0000');
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
