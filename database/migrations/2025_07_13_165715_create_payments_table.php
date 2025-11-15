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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->string('username');
            $table->string('wallet_address');
            $table->string('status')->default('pending');
            $table->timestamps();

            // علاقات اختيارية (في حال وجود جداول users/plans)
            $table->foreign('user_id')->references('pk_i_id')->on('t_users')->onDelete('set null');
            $table->foreign('plan_id')->references('pk_i_id')->on('t_plans')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
