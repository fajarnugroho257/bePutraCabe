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
        Schema::create('pengiriman_beban_lain', function (Blueprint $table) {
            $table->id();
            $table->string('pengiriman_id', 5);
            $table->string('beban_value', 100)->nullable();
            $table->date('beban_tgl', )->nullable();
            $table->timestamps();
            //
            $table->foreign('pengiriman_id')->references('pengiriman_id')->on(table: 'pengiriman')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman_beban_lain');
    }
};
