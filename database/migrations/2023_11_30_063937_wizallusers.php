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
        Schema::create('wizallusers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('name1');
            $table->string('phone')->nullable()->default('0301234567'); 
            $table->string('email')->nullable()->default('email@gmail.com'); 
            $table->string('city')->nullable()->default('ABC'); 
            $table->string('address')->nullable()->default('ABC');
            $table->string('password')->nullable()->default('1234');
            $table->string('image')->nullable()->default('icons/profile.png'); 
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
