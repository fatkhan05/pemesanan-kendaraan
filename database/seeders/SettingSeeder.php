<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'alamat' => 'Trenggalek Jawa Timur indonesia',
            'phone' => '0819988445',
            'email' => 'sewamobil@example.com',
            'footer_description' => 'sewa mobil terpercaya',
            'tentang_perusahaan' => 'membantu anda menyewa mobil impian',
            'sejarah_perusahaan' => 'Berdiri sejak tahun penjajahan lol',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/_fatkhan.akbar',
            'linkedin' => 'https://www.linkedin.com/fatkhanakbar',
            'twitter' => 'https://www.twitter.com/',
        ]);
    }
}
