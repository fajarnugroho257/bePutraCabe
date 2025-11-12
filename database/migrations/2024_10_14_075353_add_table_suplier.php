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
        Schema::create('suplier', function (Blueprint $table) {
            $table->string('suplier_id', 5)->primary();
            $table->string('suplier_nama', 100);
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
        Schema::drop('suplier');
    }
};
