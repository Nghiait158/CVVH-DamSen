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
        Schema::table('ThucVat', function (Blueprint $table) {
            $table->string('tvImgPath')->nullable(); // Thêm cột mới với kiểu VARCHAR
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ThucVat', function (Blueprint $table) {
            //
        });
    }
};
