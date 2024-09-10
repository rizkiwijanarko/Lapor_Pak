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
        // Perbarui ENUM values untuk category_event dan status
        Schema::table('reports', function (Blueprint $table) {
            DB::statement("ALTER TABLE reports MODIFY category_event ENUM('agama', 'kesehatan', 'ketertiban_umum', 'pekerjaan_umum_dan_penataan_ruang', 'pemberantasan_penyalahgunaan', 'peredaran_gelap_narkotika', 'prekursor_narkotika', 'kekerasan_di_satuan_pendidikan', 'politik_dan_hukum', 'peniadaan_mudik', 'perhubungan', 'perlindungan_konsumen', 'topik_lainnya')");
            DB::statement("ALTER TABLE reports MODIFY status ENUM('belum_diverifikasi', 'sudah_diverifikasi', 'sudah_selesai', 'ditolak')");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Kembalikan ENUM values ke nilai lama
        Schema::table('reports', function (Blueprint $table) {
            DB::statement("ALTER TABLE reports MODIFY category_event ENUM('Agama', 'Kesehatan', 'Ketertiban Umum', 'Pekerjaan Umum dan Penataan Ruang', 'Pemberantasan Penyalahgunaan', 'Peredaran Gelap Narkotika', 'Prekursor Narkotika', 'Kekerasan di Satuan Pendidikan', 'Politik dan Hukum', 'Peniadaan Mudik', 'Perhubungan', 'Perlindungan Konsumen', 'Topik Lainnya')");
            DB::statement("ALTER TABLE reports MODIFY status ENUM('belum diverifikasi', 'sudah diverifikasi', 'sudah selesai', 'ditolak')");
        });
    }
}
