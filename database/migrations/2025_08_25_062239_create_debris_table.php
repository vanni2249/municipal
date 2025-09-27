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
        Schema::create('debris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('action_id')->nullable()->constrained('actions')->onDelete('set null');
            $table->foreignId('place_id')->nullable()->constrained('places')->onDelete('set null');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->foreignId('debris_type_id')->constrained('debris_types')->onDelete('cascade');      
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debris');
    }
};
