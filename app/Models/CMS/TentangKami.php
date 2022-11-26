<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = 'tentang_kami';

        public function gambar()
    {
        $link = $this->gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/tentang-kami/'. $this->gambar)
            : asset('front_assets/img/teka-img.png');

        return $link;
    }
}
