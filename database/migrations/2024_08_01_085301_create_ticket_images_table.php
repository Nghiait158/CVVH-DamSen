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
        Schema::create('ticket_images', function (Blueprint $table) {
            $table->id('ticketImgID'); 
            $table->string('ticketImgName', 255);
            $table->string('ticketImgPath', 255);
            $table->unsignedBigInteger('ticketID'); 
            $table->foreign('ticketID')->references('ticketID')->on('ticket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_images');
    }
};
