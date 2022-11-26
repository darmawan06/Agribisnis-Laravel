<?php

namespace Database\Seeders;

use App\Models\CMS\Header;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::create([
            'judul'     => 'Kami siap mensupply kebutuhan anda Ke seluruh dunIa',
            'gambar'    => 'noimage.png',
        ]);
    }
}
