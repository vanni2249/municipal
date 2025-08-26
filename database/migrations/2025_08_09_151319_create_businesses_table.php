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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_type_id')->nullable()->onDelete('set null');
            $table->foreignId('business_category_id')->nullable()->onDelete('set null');
            $table->string('code')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('number')->nullable();
            $table->foreignId('register_id')->nullable()->onDelete('set null');
            $table->boolean('is_show')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
