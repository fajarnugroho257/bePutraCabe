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
        Schema::table('pengiriman_data', function (Blueprint $table) {
            $table->string('data_box_rupiah', 100)->nullable()->after('data_box');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengiriman_data', function (Blueprint $table) {
            //
        });
    }
};
