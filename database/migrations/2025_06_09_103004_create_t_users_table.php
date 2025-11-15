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
        Schema::create('t_users', function (Blueprint $table) {
            $table->id('pk_i_id');
            // $table->string('s_username')->unique();
            // $table->string('s_name')->nullable();
            // $table->string('s_avatar')->nullable();
            $table->string('s_email')->unique();
            $table->string('s_password');
            // $table->dateTime('dt_birth_date')->nullable();
            // $table->string('s_mobile', 14)->nullable();
            // $table->string('s_address')->nullable();
            $table->integer('b_enabled')->default(1);
            $table->string('verify_code')->nullable();
            $table->boolean('b_verified')->default(0);
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
        Schema::dropIfExists('t_users');
    }
};
