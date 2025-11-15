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
        Schema::create('t_system_settings', function (Blueprint $table) {
            $table->increments('pk_i_id');
            $table->string('s_key')->unique();
            $table->string('s_value');
            $table->integer('b_enabled')->default(1);
            $table->timestamp('dt_created_date')->nullable();
            $table->dateTime('dt_modified_date')->nullable();
            $table->dateTime('dt_deleted_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_system_settings');
    }
};
