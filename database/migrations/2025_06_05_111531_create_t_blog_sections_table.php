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
        Schema::create('t_blog_sections', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_title');
            $table->text('s_description');
            $table->boolean('b_enabled')->default(1);
            $table->unsignedBigInteger('fk_i_blog_id')->nullable();
            $table->foreign('fk_i_blog_id')->references('pk_i_id')->on('t_blogs');
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
        Schema::dropIfExists('t_blog_sections');
    }
};
