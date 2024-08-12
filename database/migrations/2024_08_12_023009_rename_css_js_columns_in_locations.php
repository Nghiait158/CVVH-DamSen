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
        Schema::table('locations', function (Blueprint $table) {
            $table->renameColumn('loImgCSS', 'loContentCss');
            $table->renameColumn('loImgJS', 'loContentJS');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->renameColumn('loContentCss', 'loImgCSS');
            $table->renameColumn('loContentJS', 'loImgJS');
        });
    }
};
