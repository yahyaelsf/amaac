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
        Schema::create('messages', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->boolean('is_from_admin')->default(false);
            $table->text('message');
            $table->unsignedBigInteger('fk_i_user_id')->nullable();
            $table->foreign('fk_i_user_id')->references('pk_i_id')->on('t_users');
            $table->integer('b_enabled')->default(1);
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
