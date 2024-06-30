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
        Schema::create('triwulan_ganjil', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreignUuid('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreignUuid('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignUuid('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->string('periode');
            $table->integer('actual_safety');
            $table->integer('actual_quality');
            $table->integer('actual_productivity');
            $table->integer('actual_cost');
            $table->integer('actual_moral');
            $table->integer('actual_lima_r');
            $table->string('remarks_safety');
            $table->string('remarks_quality');
            $table->string('remarks_productivity');
            $table->string('remarks_cost');
            $table->string('remarks_moral');
            $table->string('remarks_lima_r');
            $table->integer('range');
            $table->string('strong');
            $table->string('weakness');
            $table->string('skill');
            $table->string('knowledge');
            $table->enum('status',['pending','accept_sec','accept_dep','reject_sec','reject_dep'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('triwulan_ganjil');
    }
};
