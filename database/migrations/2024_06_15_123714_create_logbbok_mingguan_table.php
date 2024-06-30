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
        Schema::create('logbook_mingguan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreignUuid('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreignUuid('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignUuid('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->enum('minggu', ['I', 'II', 'III', 'IV']);
            $table->enum('bulan', ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
            $table->string('gambar')->nullable();
            $table->string('keterangan', 1000);
            $table->string('tool_used');
            $table->string('safety_key_point');
            $table->string('problem_solf');
            $table->string('hyarihatto');
            $table->string('point_to_remember')->nullable();
            $table->string('self_evaluation')->nullable();
            $table->string('komentar', 1000)->nullable();
            $table->enum('status', ['pending', 'accept', 'reject'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logbook_mingguan');
    }
};
