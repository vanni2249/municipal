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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->onDelete('set null');
            $table->foreignId('type_id')->onDelete('set null');
            $table->string('en_name')->nullable();
            $table->string('es_name')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('es_description')->nullable();
            $table->string('slug')->unique();
            $table->string('url')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
