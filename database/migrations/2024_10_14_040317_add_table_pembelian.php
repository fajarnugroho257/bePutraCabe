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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->string('pembelian_id', 5)->primary();
            $table->string('pembelian_nama', 100);
            $table->string('pembelian_kotor', 10);
            $table->string('pembelian_potongan', 10);
            $table->string('pembelian_bersih', 10);
            $table->string('pembelian_harga', 20);
            $table->string('pembelian_total', 20);
            $table->timestamps();
            // foreign key
            // $table->foreign('portal_id')->references('portal_id')->on('app_portal')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pembelian');
    }
};
