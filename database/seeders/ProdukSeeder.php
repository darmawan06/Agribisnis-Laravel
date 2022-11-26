<?php

namespace Database\Seeders;

use App\Models\CMS\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'nama'     => 'BATIK TUJUH RUPA',
            'gambar'    => 'dapro-1.png'
        ]);

        Produk::create([
            'nama'     => 'Batik Sogan',
            'gambar'    => 'dapro-2.png'
        ]);

        Produk::create([
            'nama'     => 'Batik Gentongan',
            'gambar'    => 'dapro-3.png'
        ]);
    }
}
