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
        Schema::table('suplier', function (Blueprint $table) {
            $table->enum('suplier_nota_st', ['yes', 'no'])->default('no')->after('suplier_tgl');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suplier', function (Blueprint $table) {
            //
        });
    }
};
