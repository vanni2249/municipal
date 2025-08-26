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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->nullable()->onDelete('set null');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            // $table->foreignId('place_id')->nullable();
            // $table->string('address')->nullable();
            // $table->string('city')->nullable();
            // $table->string('postal_code')->nullable();
            $table->boolean('is_veteran')->default(false);
            $table->boolean('is_age_advanced')->default(false);
            $table->boolean('is_bedridden')->default(false);
            $table->boolean('is_disability')->default(false);
            $table->string('disability_type')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('number')->nullable();
            $table->boolean('is_disabled')->default(false);
            $table->enum('created_by', ['admin', 'accountant', 'user'])->default('admin');
            $table->foreignId('user_id')->nullable()->onDelete('set null');
            $table->foreignId('admin_id')->nullable()->onDelete('set null');
            $table->foreignId('register_id')->nullable()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
