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
            $table->enum('data_st', ['yes', 'no'])->default('no')->after('data_total');
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
