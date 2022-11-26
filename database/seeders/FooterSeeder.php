<?php

namespace Database\Seeders;

use App\Models\CMS\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'judul' => 'Contact',
            'nama_perusahaan' => 'CV.Lingkar Rasio Teknologi',
            'alamat_icon' => 'noimage.png',
            'alamat_deskripsi' =>'Jl. Traktor No.123, Cisaranten Kulon, Kec. Arcamanik',

            'email_icon' => 'noimage.png',
            'email_deskripsi' =>'ahlinyawebsite@gmail.com',

            'message_icon' => 'noimage.png',
            'message_deskripsi' =>'+62 895-3221-47680',

            'sosial_1_icon' => 'noimage.png',
            'sosial_1_link' => '',

            'sosial_2_icon' => 'noimage.png',
            'sosial_2_link' => '',

            'sosial_3_icon' => 'noimage.png',
            'sosial_3_link' => '',

            'copyright' => 'Copyright ©2022. Designer By Ahlinyaweb'
             
        ]);
    }
}
