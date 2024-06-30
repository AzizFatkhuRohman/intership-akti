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
            $table->string('safety_ky_1');
            $table->string('safety_ky_2');
            $table->integer('range_safety_ky_1');
            $table->integer('range_safety_ky_2');
            $table->integer('act_safety_ky_1');
            $table->integer('act_safety_ky_2');
            //Safety Idea
            $table->string('safety_idea_1');
            $table->string('safety_idea_2');
            $table->integer('range_safety_idea_1');
            $table->integer('range_safety_idea_2');
            $table->integer('act_safety_idea_1');
            $table->integer('act_safety_idea_2');
            //Data Defect
            $table->integer('biq_1');
            $table->integer('biq_2');
            $table->integer('biq_3');
            //DIV
            $table->string('div_1');
            $table->string('div_2');
            $table->integer('range_div_1');
            $table->integer('range_div_2');
            $table->integer('act_div_1');
            $table->integer('act_div_2');

            $table->string('customer_1');
            $table->string('customer_2');
            $table->integer('range_customer_1');
            $table->integer('range_customer_2');
            $table->integer('act_customer_1');
            $table->integer('act_customer_2');

            $table->string('analisa_1');
            $table->string('analisa_2');
            $table->string('analisa_3');
            $table->integer('range_analisa_1');
            $table->integer('range_analisa_2');
            $table->integer('range_analisa_3');
            $table->integer('act_analisa_1');
            $table->integer('act_analisa_2');
            $table->integer('act_analisa_3');

            $table->string('reporting_1');
            $table->string('reporting_2');
            $table->integer('range_reporting_1');
            $table->integer('range_reporting_2');
            $table->integer('act_reporting_1');
            $table->integer('act_reporting_2');

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

            $table->string('tpm_1');
            $table->string('tpm_2');
            $table->string('tpm_3');
            $table->string('range_tpm_1');
            $table->string('range_tpm_2');
            $table->string('range_tpm_3');
            $table->string('act_tpm_1');
            $table->string('act_tpm_2');
            $table->string('act_tpm_3');

            $table->string('line_1');
            $table->string('line_2');
            $table->string('line_3');
            $table->string('range_line_1');
            $table->string('range_line_2');
            $table->string('range_line_3');
            $table->string('act_line_1');
            $table->string('act_line_2');
            $table->string('act_line_3');

            $table->string('repair_1');
            $table->string('repair_2');
            $table->string('repair_3');
            $table->string('range_repair_1');
            $table->string('range_repair_2');
            $table->string('range_repair_3');
            $table->string('act_repair_1');
            $table->string('act_repair_2');
            $table->string('act_repair_3');

            $table->string('indirect_1');
            $table->string('indirect_2');
            $table->integer('range_indirect_1');
            $table->integer('range_indirect_2');
            $table->integer('act_indirect_1');
            $table->integer('act_indirect_2');

            $table->string('direct_1');
            $table->string('direct_2');
            $table->integer('range_direct_1');
            $table->integer('range_direct_2');
            $table->integer('act_direct_1');
            $table->integer('act_direct_2');

            $table->string('abnormality_1');
            $table->string('abnormality_2');
            $table->integer('range_abnormality_1');
            $table->integer('range_abnormality_2');
            $table->integer('act_abnormality_1');
            $table->integer('act_abnormality_2');

            $table->integer('kehadiran_1');
            $table->integer('kehadiran_2');

            $table->integer('mindset_1');
            $table->integer('mindset_2');
            $table->integer('mindset_3');
            $table->integer('mindset_4');

            $table->integer('etika_1');
            $table->integer('etika_2');
            $table->integer('etika_3');
            $table->integer('etika_4');
            $table->integer('etika_5');
            $table->integer('etika_6');
            $table->integer('etika_7');
            $table->integer('etika_8');
            $table->integer('etika_9');
            $table->integer('etika_10');

            $table->integer('jkn_1');
            $table->integer('jkn_2');
            $table->integer('lima_r_1');
            $table->integer('lima_r_2');

            $table->string('qcc_1');
            $table->string('qcc_2');
            $table->integer('range_qcc_1');
            $table->integer('range_qcc_2');
            $table->integer('act_qcc_1');
            $table->integer('act_qcc_2');

            $table->string('idea_1');
            $table->string('idea_2');
            $table->integer('range_idea_1');
            $table->integer('range_idea_2');
            $table->integer('act_idea_1');
            $table->integer('act_idea_2');
            $table->integer('tji_1');
            $table->integer('tji_2');
            $table->integer('total_point');
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
