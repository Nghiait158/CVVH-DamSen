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
        Schema::table('ticket', function (Blueprint $table) {
            // Thêm cột ticketContentCss và ticketContentJS
            $table->text('ticketContentCss')->nullable()->after('ticketContent');
            $table->text('ticketContentJS')->nullable()->after('ticketContentCss');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket', function (Blueprint $table) {
            // Xóa cột ticketContentCss và ticketContentJS
            $table->dropColumn(['ticketContentCss', 'ticketContentJS']);
        });
    }
};
