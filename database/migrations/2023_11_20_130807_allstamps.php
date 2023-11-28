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
        Schema::create('allstamps', function (Blueprint $table) {
            $table->id();
            $table->string('stampid')->nullable()->default('stampid1'); 
            $table->string('type')->nullable()->default('realestate'); 
            $table->points('stampdata')->nullable()->default('realestate'); 
            // $table->string('phone')->nullable()->default('0301234567'); 
            // $table->string('cnic')->nullable()->default('0301234567'); 
            // $table->string('office')->nullable()->default('0301234567'); 
            // $table->string('city')->nullable()->default('city'); 
            // $table->string('address')->nullable()->default('address');
            // $table->string('final_price')->nullable()->default('0301234567'); 
            // $table->string('signature')->nullable()->default('0301234567'); 
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
