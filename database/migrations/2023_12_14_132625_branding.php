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
         Schema::create('branding', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable()->default('1');
            $table->string('bussiness_logo')->nullable()->default('icons/logo.png');
            $table->string('bussiness_name')->nullable()->default('WebSeoWiz');
            $table->string('bussiness_email')->nullable()->default('1info@webseowiz.com');
            $table->string('bussiness_phone')->nullable()->default('0301234567');
            $table->string('plan_type')->nullable()->default('silver');
            $table->string('plan_name')->nullable()->default('1 year');
            $table->string('plan_duration')->nullable()->default('84600');
            $table->string('is_paid')->nullable()->default('yes');
            $table->string('pay_by')->nullable()->default('transaction');
            $table->string('total')->nullable()->default('0');
            $table->string('is_active')->nullable()->default('yes');
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
