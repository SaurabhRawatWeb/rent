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
       Schema::create('companies', function (Blueprint $table) {
            $table->id();
            // Public identifier
            $table->uuid('uuid')->unique();
            // Basic company information
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('legal_name')->nullable();
            // Contact information
            $table->string('email')->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('website')->nullable();
            // Branding
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            // Address
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country', 2)->default('IN');
            $table->string('postal_code', 20)->nullable();
            // Tax & registration
            $table->string('tax_number', 50)->nullable();
            $table->string('gst_number', 15)->nullable();
            $table->string('registration_number', 100)->nullable();
            // Localization
            $table->string('timezone', 64)->default('Asia/Kolkata');
            $table->string('currency', 3)->default('INR');
            $table->string('locale', 10)->default('en_IN');
            $table->string('date_format', 30)->default('d M Y');
            // Company lifecycle
            $table->string('status', 30)->default('active');
            // Onboarding
            $table->timestamp('onboarding_completed_at')->nullable();
            // Timestamps
            $table->timestamps();
            // Soft delete
            $table->softDeletes();
            // Indexes
            $table->index('status');
            $table->index('country');
            $table->index('gst_number');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
