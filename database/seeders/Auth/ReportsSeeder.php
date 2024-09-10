<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            [
                'code' => 'AD001',
                'category_event' => 'agama',
                'content' => 'Saya mengeluhkan suara azan dari masjid yang terlalu keras setiap pagi dan malam, mengganggu tidur warga sekitar.',
                'media' => NULL,
                'status' => 'belum_diverifikasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD002',
                'category_event' => 'kesehatan',
                'content' => 'Pelayanan di Puskesmas sangat lambat dan beberapa obat tidak tersedia, padahal saya harus segera mendapatkan perawatan.',
                'media' => NULL,
                'status' => 'sudah_diverifikasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD003',
                'category_event' => 'ketertiban_umum',
                'content' => 'Setiap malam, kendaraan diparkir sembarangan di jalanan umum sehingga menghalangi akses ke rumah warga.',
                'media' => NULL,
                'status' => 'sudah_selesai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD004',
                'category_event' => 'pekerjaan_umum_dan_penataan_ruang',
                'content' => 'Jalan di depan kantor kami sudah rusak selama berbulan-bulan dan belum ada upaya perbaikan dari pihak terkait.',
                'media' => NULL,
                'status' => 'belum_diverifikasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD005',
                'category_event' => 'pemberantasan_penyalahgunaan',
                'content' => 'Saya sering melihat adanya aktivitas mencurigakan terkait narkoba di lingkungan RT 03, mohon untuk ditindaklanjuti.',
                'media' => NULL,
                'status' => 'sudah_selesai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD006',
                'category_event' => 'perhubungan',
                'content' => 'Jadwal bus kota sering tidak sesuai dengan waktu yang sudah ditetapkan, menyebabkan banyak penumpang terlantar.',
                'media' => NULL,
                'status' => 'ditolak',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD007',
                'category_event' => 'politik_dan_hukum',
                'content' => 'Ada kampanye politik yang dilakukan di sekolah, padahal tempat tersebut seharusnya netral dari kegiatan politik.',
                'media' => NULL,
                'status' => 'belum_diverifikasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD008',
                'category_event' => 'perlindungan_konsumen',
                'content' => 'Saya membeli produk makanan di toko yang ternyata sudah kadaluarsa dan masih dijual tanpa peringatan.',
                'media' => NULL,
                'status' => 'sudah_diverifikasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD009',
                'category_event' => 'ketertiban_umum',
                'content' => 'Tempat hiburan di sekitar komplek sering mengadakan acara sampai larut malam, menyebabkan kebisingan yang tidak nyaman.',
                'media' => NULL,
                'status' => 'sudah_selesai',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'AD010',
                'category_event' => 'topik_lainnya',
                'content' => 'Pelayanan di kantor pemerintahan sangat lambat dan tidak ada kejelasan mengenai prosedur yang harus diikuti.',
                'media' => NULL,
                'status' => 'belum_diverifikasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
