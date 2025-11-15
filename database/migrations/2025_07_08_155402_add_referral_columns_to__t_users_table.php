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
        Schema::table('t_users', function (Blueprint $table) {
            $table->string('ref_code')->unique()->nullable();
            $table->unsignedBigInteger('referred_by')->nullable();
            $table->foreign('referred_by')->references('pk_i_id')->on('t_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_users', function (Blueprint $table) {
            //
        });
    }
};
