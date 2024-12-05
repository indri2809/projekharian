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
        Schema::create('laporanharians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyek_id');
            $table->date('tanggal');
            $table->string('mandor');
            $table->string('kepala_tukang');
            $table->string('tukang');
            $table->string('pekerja');
            $table->time('cuaca_siang');
            $table->time('cuaca_sore');
            $table->time('cuaca_malam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporanharians');
    }
};
