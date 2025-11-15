<?php

use App\Models\TPermission;
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
        Schema::table('permissions', function (Blueprint $table) {
             $table->string('display_name');
            $table->foreignIdFor(TPermission::class, 'parent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('display_name');
            $table->dropForeign('parent_id');
            $table->dropColumn('parent_id');
        });
    }
};
