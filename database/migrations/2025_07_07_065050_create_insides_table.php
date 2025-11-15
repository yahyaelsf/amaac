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
        Schema::create('insides', function (Blueprint $table) {
            $table->id();
            $table->string('ticker');
            $table->string('name');
            $table->string('asset_class');
            $table->string('index')->nullable();
            $table->string('sector')->nullable();
            $table->string('industry')->nullable();
            $table->string('fuego_ai')->nullable();
            $table->date('last_update')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insides');
    }
};
