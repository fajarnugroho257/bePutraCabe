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
        Schema::create('pengiriman_data', function (Blueprint $table) {
            $table->string('data_id', 9)->primary();
            $table->string('pengiriman_id', 5);
            $table->string('data_merek', 50)->nullable();
            $table->string('data_barang', 100)->nullable();
            $table->string('data_tonase', 10)->nullable();
            $table->string('data_harga', 15)->nullable();
            $table->string('data_total', 15)->nullable();
            $table->timestamps();
            //
            $table->foreign('pengiriman_id')->references('pengiriman_id')->on('pengiriman')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengiriman_data', function (Blueprint $table) {
            $table->drop();
        });
    }
};
