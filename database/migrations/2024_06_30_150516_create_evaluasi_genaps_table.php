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
        Schema::create('evaluasi_genap', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreignUuid('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreignUuid('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignUuid('departement_id')->references('id')->on('departements')->onDelete('cascade');
            //Kesehatan
            $table->integer('kesehatan_1');
            $table->integer('kesehatan_2');
            $table->integer('kesehatan_3');
            $table->integer('kesehatan_4');
            $table->integer('kesehatan_5');
            //safety
            $table->integer('accident_1');
            $table->integer('accident_2');
            //Apd
            $table->integer('apd_1');
            $table->integer('apd_2');
            //SPC
            $table->integer('spc_1');
            $table->integer('spc_2');
            //SCW
            $table->integer('scw_1');
            $table->integer('scw_2');

            $table->integer('kyt_1');
            $table->integer('kyt_2');
            //Safety ky
            $table->integer('safety_ky_1');
            $table->integer('safety_ky_2');
            //Safety Idea
            $table->integer('safety_idea_1');
            $table->integer('safety_idea_2');
            //Data Defect
            $table->integer('biq_1');
            $table->integer('biq_2');
            $table->integer('biq_3');
            //DIV
            $table->integer('div_1');
            $table->integer('div_2');

            $table->integer('customer_1');
            $table->integer('customer_2');

            $table->integer('analisa_1');
            $table->integer('analisa_2');
            $table->integer('analisa_3');

            $table->integer('reporting_1');
            $table->integer('reporting_2');

            $table->integer('job_1');
            $table->integer('job_2');
            $table->integer('job_3');

            $table->integer('kerja_1');
            $table->integer('kerja_2');
            $table->integer('kerja_3');
            $table->integer('kerja_4');
            $table->integer('kerja_5');
            $table->integer('kerja_6');
            $table->integer('kerja_7');
            $table->integer('kerja_8');
            $table->integer('kerja_9');
            $table->integer('kerja_10');
            $table->integer('kerja_11');
            $table->integer('kerja_12');
            $table->integer('kerja_13');
            $table->integer('kerja_14');

            $table->integer('tpm_1');
            $table->integer('tpm_2');
            $table->integer('tpm_3');

            $table->integer('line_1');
            $table->integer('line_2');
            $table->integer('line_3');

            $table->integer('repair_1');
            $table->integer('repair_2');
            $table->integer('repair_3');

            $table->integer('indirect_1');
            $table->integer('indirect_2');

            $table->integer('direct_1');
            $table->integer('direct_2');

            $table->integer('abnormality_1');
            $table->integer('abnormality_2');

            $table->integer('kehadiran_1');
            $table->integer('kehadiran_2');

            $table->integer('inisiatif_1');
            $table->integer('inisiatif_2');
            $table->integer('inisiatif_3');

            $table->integer('disiplin_1');
            $table->integer('disiplin_2');
            $table->integer('disiplin_3');
            $table->integer('disiplin_4');
            $table->integer('disiplin_5');

            $table->integer('tanggung_jawab_1');
            $table->integer('tanggung_jawab_2');
            $table->integer('tanggung_jawab_3');
            $table->integer('kerja_sama_1');
            $table->integer('kerja_sama_2');
            $table->integer('kerja_sama_3');

            $table->integer('jkn_1');
            $table->integer('jkn_2');
            $table->integer('lima_r_1');
            $table->integer('lima_r_2');

            $table->integer('qcc_1');
            $table->integer('qcc_2');

            $table->integer('idea_1');
            $table->integer('idea_2');
            $table->integer('gcrc_1');
            $table->integer('gcrc_2');
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
        Schema::dropIfExists('evaluasi_genap');
    }
};
