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
        Schema::create('nota_data', function (Blueprint $table) {
            $table->id();
            $table->string('nota_id', 20);
            $table->string('suplier_id', 5);
            $table->timestamps();
            // foreign key
            $table->foreign('nota_id')->references('nota_id')->on('nota')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('suplier_id')->references('suplier_id')->on('suplier')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_data');
    }
};
