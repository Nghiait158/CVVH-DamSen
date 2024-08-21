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
        Schema::create('ThucVat', function (Blueprint $table) {
            $table->id('tvID');
            $table->string('tvName', 255);
            $table->string('tvStatus', 255);
            $table->date('tvDate');
            $table->string('tvDescription', 255);
            $table->text('tvContent');
            $table->text('tvContentCSS');
            $table->text('tvContentJS');
            $table->timestamps(); // thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thucvat');
    }
};
