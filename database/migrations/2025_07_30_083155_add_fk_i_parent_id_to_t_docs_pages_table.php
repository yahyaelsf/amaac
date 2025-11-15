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
        Schema::table('t_docs_pages', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_i_parent_id')->nullable()->after('pk_i_id');
            $table->foreign('fk_i_parent_id')->references('pk_i_id')->on('t_docs_pages')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_docs_pages', function (Blueprint $table) {
            $table->dropForeign(['fk_i_parent_id']);
            $table->dropColumn('fk_i_parent_id');
        });
    }
};
