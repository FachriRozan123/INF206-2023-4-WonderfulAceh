<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tempat_wisata')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Pulau Weh')),
            'nama_tempat' => 'Pulau Weh',
            'alamat' => 'Sabang',
            'nama_pemilik' => 'pemerintah',
            'nomor_pemilik' => '-',
            'category_id' => '1',
            'deskripsi' => 'Pulau terluar Indonesia yang terletak di ujung barat Sumatera dengan keindahan bawah laut yang memukau.',
            'image' => 'storage/img/pulauweh.jpg',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tempat_wisata')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Baiturrahman Grand Mosque')),
            'nama_tempat' => 'Baiturrahman Grand Mosque',
            'alamat' => 'Banda Aceh',
            'nama_pemilik' => 'pemerintah',
            'nomor_pemilik' => '-',
            'category_id' => '2',
            'deskripsi' => 'Masjid yang menjadi simbol dari Kota Banda Aceh, dibangun pada abad ke-17 dan masih berdiri kokoh hingga saat ini.',
            'image' => 'storage/img/masjid.jpg',
            'user_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tempat_wisata')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Ulee Lheue Beach')),
            'nama_tempat' => 'Ulee Lheue Beach',
            'alamat' => 'Banda Aceh',
            'nama_pemilik' => 'PT Pelabuhan Indonesia III',
            'nomor_pemilik' => '456',
            'category_id' => '3',
            'deskripsi' => 'Pantai yang terletak di sebelah barat Kota Banda Aceh dengan panorama yang menawan.',
            'image' => 'storage/img/uleelheue.jpg',
            'user_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tempat_wisata')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Pantai Lhok Nga')),
            'nama_tempat' => 'Pantai Lhok Nga',
            'alamat' => 'Aceh Besar',
            'nama_pemilik' => 'warga',
            'nomor_pemilik' => '789',
            'category_id' => '3',
            'deskripsi' => 'Pantai yang terletak di sebelah barat Kota Banda Aceh dengan pasir putih yang lembut dan ombak yang cocok untuk berselancar.',
            'image' => 'storage/img/lhoknga.jpg',
            'user_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
