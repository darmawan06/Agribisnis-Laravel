<?php

namespace Database\Seeders;

use App\Models\CMS\Testimoni;
use Illuminate\Database\Seeder;

class TestimonisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimoni::create([
            'nama'     => 'Sri Lestari Agustina',
            'deskripsi'=> 'Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. Pellentesque vehicula consequat nisl, sit amet aliquet ex fermentum et',
            'gambar'    => 'testimoni-img.png'
        ]);

        Testimoni::create([
            'nama'     => 'Sri Lestari Agustina',
            'deskripsi'=> 'Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. Pellentesque vehicula consequat nisl, sit amet aliquet ex fermentum et. Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. Pellentesque vehicula consequat nisl, sit amet aliquet ex fermentum et. Cras iaculis rhoncus mi, euismod pulvinar tortor porta in. Praesent cursus iaculis tempor. Pellentesque vehicula consequat nisl, sit amet aliquet ex fermentum et.',
            'gambar'    => 'testimoni-img.png'
        ]);
    }
}
