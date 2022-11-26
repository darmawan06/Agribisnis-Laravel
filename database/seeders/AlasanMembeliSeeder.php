<?php

namespace Database\Seeders;

use App\Models\CMS\AlasanMembeli;
use Illuminate\Database\Seeder;

class AlasanMembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlasanMembeli::create([
            'judul'                 => 'KEUNTUNGAN JIKA MEMBELI PRODUK KEPADA KAMI',
            'deskripsi'             => 'Pellentesque ultrices dapibus tortor, semper eleifend erat. Nullam venenatis risus et velit sollicitudin pretium sed vitae odio. Morbi est velit, commodo non diam quis, varius elementum',
            'alasan_1_icon'        => 'noimage.png',
            'alasan_1_deskripsi'    => 'GRATIS PENGIRIMAN',
            'alasan_2_icon'        => 'noimage.png',
            'alasan_2_deskripsi'    => 'PENGIRIMAN CEPAT',
            'alasan_3_icon'        => 'noimage.png',
            'alasan_3_deskripsi'    => 'GRATIS PENGIRIMAN',
        ]);
    }
}
