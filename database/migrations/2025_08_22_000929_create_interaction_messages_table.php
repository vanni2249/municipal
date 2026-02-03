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
            $table->foreignId('created_account_id')->nullable()->constrained('accounts')->onDelete('set null');
            $table->foreignId('read_account_id')->nullable()->constrained('accounts')->onDelete('set null');
            $table->timestamp('read_account_at')->nullable();
            $table->foreignId('created_admin_id')->nullable()->constrained('admins')->onDelete('set null');
            $table->foreignId('read_admin_id')->nullable()->constrained('admins')->onDelete('set null');
            $table->timestamp('read_admin_at')->nullable();
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
