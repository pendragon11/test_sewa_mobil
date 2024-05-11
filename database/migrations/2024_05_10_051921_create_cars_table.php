<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('merek');
            $table->string('model');
            $table->string('nomorplat');
            $table->string('tarifsewa');
            $table->string('tanggalawal');
            $table->string('tanggalakhir');
            $table->boolean('sewa')->default(true);
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
