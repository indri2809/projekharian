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
        Schema::create('masalahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laporanharian_id');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('laporanharian_id')->references('id')->on('laporanharians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masalahs');
    }
};
