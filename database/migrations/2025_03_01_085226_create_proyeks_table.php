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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->integer("id_struktur");
            $table->string("nama");
            $table->string("posisi");
            $table->string("nomor");
            $table->integer("durasi");
            $table->date("ttdkntrk");
            $table->date("mulai_ek");
            $table->date("berakhir_pb");
            $table->date("berakhir_k");
            $table->integer("nilai_kb");
            $table->integer("nilai_kn");
            $table->integer("hpp");
            $table->integer("lababruto");
            $table->string("jenisanggaran");
            $table->string("cust");
            $table->string("enduser");
            $table->integer("masa_warranty");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};
