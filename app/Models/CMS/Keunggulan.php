<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keunggulan extends Model
{
    use HasFactory;

    protected $table = 'keunggulan';

    public function gambar($gambar, $nameFrontAsset)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/keunggulan/'. $gambar)
            : asset('front_assets/img/'. $nameFrontAsset);

        return $link;
    }
}
