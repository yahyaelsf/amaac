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
        Schema::create('t_plans', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_title')->nullable();
            $table->float('i_price')->nullable();
            $table->json('s_features')->nullable();
            $table->enum('e_type', ['Monthly', 'Quarterly','Yearly']);
            $table->boolean('b_enabled')->default(1);
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
        Schema::dropIfExists('t_plans');
    }
};
