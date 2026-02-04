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
        Schema::create('app_citizen_register_special_people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date')->nullable();
            $table->boolean('is_disabled')->default(false);
            $table->string('disability_type')->nullable();
            $table->boolean('is_veteran')->default(false);
            $table->boolean('is_deceased')->default(false);
            $table->date('deceased_date')->nullable();
            $table->string('relationship')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('place_id')->nullable()->constrained('places')->onDelete('set null');
            $table->string('zip_code')->nullable();
            $table->string('remarks')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_citizen_register_special_people');
    }
};
