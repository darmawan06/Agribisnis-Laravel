<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footer';

    public function gambar($gambar, $nameFrontAsset)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/footer/'. $gambar)
            : asset('front_assets/img/'. $nameFrontAsset);

        return $link;
    }
}
