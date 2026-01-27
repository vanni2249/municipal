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
        Schema::create('interaction_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('interaction_id')->constrained('interactions')->onDelete('cascade');
            $table->text('message');
            $table->foreignId('user_created_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('user_read_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('user_read_at')->nullable();
            $table->foreignId('admin_created_id')->nullable()->constrained('admins')->onDelete('set null');
            $table->foreignId('admin_read_id')->nullable()->constrained('admins')->onDelete('set null');
            $table->timestamp('admin_read_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interaction_messages');
    }
};
