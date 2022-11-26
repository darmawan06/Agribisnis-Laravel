<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';
    public function gambar($gambar, $nameFrontAsset)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/galeri/'. $gambar)
            : asset('front_assets/img/'. $nameFrontAsset);

        return $link;
    }
}
