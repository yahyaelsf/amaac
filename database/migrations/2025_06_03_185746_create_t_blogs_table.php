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
        Schema::create('t_blogs', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_title');
            $table->text('s_description');
            $table->integer('i_view')->default(0);
            $table->string('s_writer');
            $table->string('s_cover')->nullable();
            $table->boolean('b_enabled')->default(1);
            $table->unsignedBigInteger('fk_i_category_id')->nullable();
            $table->foreign('fk_i_category_id')->references('pk_i_id')->on('t_categories');
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
        Schema::dropIfExists('t_blogs');
    }
};
