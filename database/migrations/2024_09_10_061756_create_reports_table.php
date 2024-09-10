<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
                'Agama',
                'Kesehatan',
                'Ketertiban Umum',
                'Pekerjaan Umum dan Penataan Ruang',
                'Pemberantasan Penyalahgunaan',
                'Peredaran Gelap Narkotika',
                'Prekursor Narkotika',
                'Kekerasan di Satuan Pendidikan',
                'Politik dan Hukum',
                'Peniadaan Mudik',
                'Perhubungan',
                'Perlindungan Konsumen',
                'Topik Lainnya'
            ]);
            $table->text('content');
            $table->string('media')->nullable();
            $table->enum('status', ['belum diverifikasi', 'sudah diverifikasi', 'sudah selesai', 'ditolak']);
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
