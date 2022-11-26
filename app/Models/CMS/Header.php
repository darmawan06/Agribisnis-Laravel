<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = 'header';

    public function gambar()
    {
        $link = $this->gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/header/'. $this->gambar)
            : asset('front_assets/img/header-img.png');

        return $link;
    }
}
