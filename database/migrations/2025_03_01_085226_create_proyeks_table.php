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
            $table->unsignedBigInteger('id_struktur')->nullable()->constrained('struktur_organisasis')->onDelete('cascade');
            $table->string("nama");
            $table->string("posisi")->nullable();
            $table->string("nomor")->nullable();
            $table->integer("durasi")->nullable();
            $table->date("ttdkntrk")->nullable();
            $table->date("mulai_ek")->nullable();
            $table->date("berakhir_pb")->nullable();
            $table->date("berakhir_k")->nullable();
            $table->integer("nilai_kb")->nullable();
            $table->integer("nilai_kn")->nullable();
            $table->integer("hpp")->nullable();
            $table->integer("lababruto")->nullable();
            $table->string("jenisanggaran")->nullable();
            $table->string("cust")->nullable();
            $table->string("enduser")->nullable();
            $table->integer("masa_warranty")->nullable();
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
