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
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('referrer_id'); // user who earned the commission
            $table->unsignedBigInteger('payment_id')->nullable(); // related payment
            $table->decimal('commission_amount', 12, 2);
            $table->decimal('commission_rate', 5, 2)->nullable();
            $table->boolean('is_withdrawn')->default(false);
            $table->timestamps();


            $table->foreign('referrer_id')->references('pk_i_id')->on('t_users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commissions');
    }
};
