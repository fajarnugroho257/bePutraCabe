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
        Schema::create('beban_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('pengiriman_id', 5);
            $table->string('nama', 50)->nullable();
            $table->string('jumlah', 15);
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
        Schema::dropIfExists('beban_pengiriman');
    }
};
