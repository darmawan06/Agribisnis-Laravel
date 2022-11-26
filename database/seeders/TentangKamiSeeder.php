<?php

namespace Database\Seeders;

use App\Models\CMS\TentangKami;
use Illuminate\Database\Seeder;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TentangKami::create([
            'judul'     => 'TENTANG KAMI',
            'deskripsi' => 'Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. Pellentesque vehicula consequat nisl, sit amet aliquet ex fermentum et. Phasellus scelerisque cursus diam sed faucibus. Pellentesque ultrices dapibus tortor, semper eleifend erat. Nullam venenatis risus et velit sollicitudin pretium sed vitae odio. Morbi est velit, commodo non diam quis, varius elementum ligula. Nullam volutpat libero vel est blandit, gravida accumsan purus commodo.',
            'gambar'    => 'noimage.png'
        ]);
    }
}
