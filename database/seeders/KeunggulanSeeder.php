<?php

namespace Database\Seeders;

use App\Models\CMS\Keunggulan;
use Illuminate\Database\Seeder;

class KeunggulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keunggulan::create([
            'judul'                     => 'keunggulan perusahaan <i>ahlinyaAgriBisnis</i>',
            'keunggulan_1_icon'        => 'noimage.png',
            'keunggulan_1_deskripsi'    => 'Siap kirim ke seluruh dunia',
            'keunggulan_2_icon'        => 'noimage.png',
            'keunggulan_2_deskripsi'    => 'Pengiriman Sangat cepat',
            'keunggulan_3_icon'        => 'noimage.png',
            'keunggulan_3_deskripsi'    => 'perusahaan terus berkembang',
        ]);
    }
}
