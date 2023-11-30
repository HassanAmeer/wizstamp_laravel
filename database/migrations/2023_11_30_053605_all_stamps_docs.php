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
        Schema::create('all_stamps_docs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable()->default('1'); // 1
            $table->string('wizid')->nullable()->default('ID786'); // E2389HJHG28
            $table->boolean('islocked')->nullable()->default(false);
            $table->string('doc_type')->nullable()->default('Real Estate'); 
            $table->string('seller_name')->nullable()->default('ABC'); 
            $table->string('form_creation_time')->nullable()->default('11-30-2023'); 
            $table->string('seller_submit_time')->nullable()->default('11-30-2023'); 
            $table->string('seller_doc')->nullable()->default('icons/notfound.png'); 
            $table->string('buyer_name')->nullable()->default('ABC'); 
            $table->string('buyer_doc')->nullable()->default('icons/notfound.png'); 
            $table->string('buyer_submit_time')->nullable()->default('12-01-2023'); 
            // $table->timestamp('created_at')->nullable();
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
