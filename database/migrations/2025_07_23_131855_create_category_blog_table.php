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
        Schema::create('category_blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_i_blog_id')->references('pk_i_id')->on('t_blogs')->onDelete('cascade');
            $table->foreignId('fk_i_category_id')->references('pk_i_id')->on('t_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_blog');
    }
};
