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
        Schema::create('location_image', function (Blueprint $table) {
            $table->id('loImgID');
            $table->string('loImgName');
            $table->string('loImgPath');
            // $table->foreignId('loID')->constrained('locations');
            $table->unsignedBigInteger('loID');
            $table->foreign('loID')->references('loID')->on('locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_image');
    }
};
