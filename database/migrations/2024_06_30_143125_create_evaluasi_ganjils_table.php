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
        Schema::create('evaluasi_ganjil', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreignUuid('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreignUuid('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignUuid('departement_id')->references('id')->on('departements')->onDelete('cascade');
            //Kesehatan
            $table->integer('kesehatan');
            $table->integer('safety_accident');
            $table->integer('apd');
            $table->integer('spc');
            $table->integer('scw');
            $table->integer('kyt');
            $table->integer('safety_ability');
            $table->integer('safety_idea');
            $table->integer('biq');
            $table->integer('div');
            $table->integer('customer');
            $table->integer('analisa');
            $table->integer('reporting');
            $table->integer('job');
            $table->integer('motivasi');
            $table->integer('penyelesaian');
            $table->integer('karakteristik');
            $table->integer('tpm');
            $table->integer('line');
            $table->integer('repair');
            $table->integer('indirect');
            $table->integer('direct');
            $table->integer('abnormality');
            $table->integer('kehadiran');
            $table->integer('mindset');
            $table->integer('pribadi');
            $table->integer('jkn');
            $table->integer('lima_r');
            $table->integer('qcc');
            $table->integer('idea');
            $table->integer('tji');
            $table->integer('total_point');
            $table->enum('status',['pending','accept','reject'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi_ganjil');
    }
};
