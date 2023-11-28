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
        Schema::create('wizusers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('name1'); 
            $table->string('phone')->nullable()->default('0301234567'); 
            $table->string('city')->nullable()->default('city'); 
            $table->string('address')->nullable()->default('address');
            $table->string('image')->nullable()->default('image.png'); 
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
