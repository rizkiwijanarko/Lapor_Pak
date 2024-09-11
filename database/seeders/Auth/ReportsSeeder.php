<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        $categories = [
            'agama', 'kesehatan', 'ketertiban_umum', 'pekerjaan_umum_dan_penataan_ruang', 
            'pemberantasan_penyalahgunaan', 'perhubungan', 'politik_dan_hukum', 
            'perlindungan_konsumen', 'topik_lainnya'
        ];
        $statuses = ['belum_diverifikasi', 'sudah_diverifikasi', 'sudah_selesai', 'ditolak'];

        for ($i = 1; $i <= 50; $i++) {
            $created_at = $faker->dateTimeBetween('2023-01-01', '2024-08-31');
            $updated_at = Carbon::parse($created_at)->addDays(rand(1, 30));

            DB::table('reports')->insert([
                'code' => 'AD' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'category_event' => $faker->randomElement($categories),
                'content' => $faker->text(200),
                'media' => NULL,
                'status' => $faker->randomElement($statuses),
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        }
    }
}
