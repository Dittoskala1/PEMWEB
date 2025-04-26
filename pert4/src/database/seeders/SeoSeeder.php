<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Seo::count()==0){
            Seo::create([
                'title' => 'Kusuma Putra Sukses',
                'description' => 'Kusuma Putra Sukses adalah mitra terbaik Anda untuk solusi kebutuhan industri, dengan produk dan layanan berkualitas tinggi',
                'keyword' => 'industri, solusi terpercaya, Kusuma Putra Sukses',
                'canonical_url' => 'kusumaputrasukses.com',
                'robots' => 'index, follow',
                'og_image' => '',
            ]);
        }
    }
}