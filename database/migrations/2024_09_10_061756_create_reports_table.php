<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->enum('category_event', [
                'agama',
                'kesehatan',
                'ketertiban_umum',
                'pekerjaan_umum_dan_penataan_ruang',
                'pemberantasan_penyalahgunaan',
                'peredaran_gelap_narkotika',
                'prekursor_narkotika',
                'kekerasan_di_satuan_pendidikan',
                'politik_dan_hukum',
                'peniadaan_mudik',
                'perhubungan',
                'perlindungan_konsumen',
                'topik_lainnya'
            ]);
            $table->text('content');
            $table->text('address');
            $table->string('media')->nullable();
            $table->enum('status', ['belum_diverifikasi', 'sudah_diverifikasi', 'sudah_selesai', 'ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
