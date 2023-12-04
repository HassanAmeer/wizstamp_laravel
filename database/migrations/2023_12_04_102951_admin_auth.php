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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable()->default('icons/profile.png'); 
            $table->string('name')->nullable()->default('admin');
            $table->string('email')->nullable()->default('admin@gmail.com'); 
            $table->string('password')->nullable()->default('1234');
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
