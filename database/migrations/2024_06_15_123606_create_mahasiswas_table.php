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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignUuid('dosen_id')->references('id')->on('dosens')->onDelete('cascade');
            $table->foreignUuid('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreignUuid('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignUuid('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->enum('prodi',['tpmo','topkr']);
            $table->string('no_reg', 20);
            $table->integer('batch');
            $table->enum('shift', ['red', 'white']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
