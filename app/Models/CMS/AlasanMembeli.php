<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlasanMembeli extends Model
{
    use HasFactory;

    protected $table = 'alasan_membeli';

    public function gambar($gambar, $nameFrontAsset)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/alasan-membeli/'. $gambar)
            : asset('front_assets/img/'. $nameFrontAsset);

        return $link;
    }
}
