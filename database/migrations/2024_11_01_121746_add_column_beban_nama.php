<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pengiriman_beban_lain', function (Blueprint $table) {
            $table->string('beban_nama', 150)->nullable()->after('pengiriman_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengiriman_beban_lain', function (Blueprint $table) {
            //
        });
    }
};
