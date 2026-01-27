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
            $table->ulid('ulid')->unique();
            $table->string('number')->unique();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('account_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_type_id')->constrained('service_type')->onDelete('cascade');
            $table->decimal('amount', 10, 2)->default(0);
            $table->decimal('fee', 10, 2)->default(0);
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
