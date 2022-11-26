<?php

namespace Database\Seeders;


use App\Models\CMS\Galeri;
use Illuminate\Database\Seeder;

class GalerisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galeri::create([
            'judul' => 'CARA KAMI MENGHASILKAN PRODUK BERKUALITAS',
            'galeri_1_img'  => 'noimage.png',
            'galeri_1_deskripsi' => 'MENGGUNAKAN PUPUK TERBAIK',
            'galeri_2_img'  => 'noimage.png',
            'galeri_2_deskripsi' => 'TANAMAN SANGAT DI RAWAT',
            'galeri_3_img'  => 'noimage.png',
            'galeri_3_deskripsi' => 'MEMANFAATKAN TEKNOLOGI TERBARU',
        ]);
    }
}
