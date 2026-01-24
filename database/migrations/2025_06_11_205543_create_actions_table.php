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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->morphs('actionable');
            $table->foreignId('action_category_id')->nullable()->constrained('action_categories')->nullOnDelete();
            $table->text('description')->nullable();
            $table->string('created_by')->nullable();
            $table->foreignId('register_id')->nullable()->onDelete('set null');
            $table->foreignId('admin_id')->nullable()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
