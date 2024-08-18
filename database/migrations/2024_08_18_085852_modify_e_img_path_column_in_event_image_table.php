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
        Schema::table('event_image', function (Blueprint $table) {
            $table->string('eImgPath', 2048)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('event_image', function (Blueprint $table) {
            $table->string('eImgPath', 255)->change(); // Or the original length
        });
    }
};
