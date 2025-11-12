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
            $table->date('suplier_tgl')->after('suplier_nama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suplier', function (Blueprint $table) {
            $table->removeColumn('suplier_tgl');
        });
    }
};
