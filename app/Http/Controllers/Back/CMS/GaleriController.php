<?php

namespace App\Http\Controllers\Back\CMS;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::first();

        return view('back.cms.galeri.index', compact('galeri'));
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        $galeri = Galeri::first();

        try {
            if ($galeri != null) {
                $galeri->judul        = $request->judul;

                if($request->hasfile('galeri_1_img')) {
                    if($galeri->galeri_1_img != 'gapro-1.png') {
                        File::delete('back_assets/dist/img/cms/galeri/'. $galeri->galeri_1_img);
                    }
                    $galeri->galeri_1_img = HelpersUser::uploadImage($request, 'galeri_1_img', 'back_assets/dist/img/cms/galeri/');
                }

                $galeri->galeri_1_deskripsi = $request->galeri_1_deskripsi;

                
                if($request->hasfile('galeri_2_img')) {
                    if($galeri->galeri_2_img != 'gapro-2.png') {
                        File::delete('back_assets/dist/img/cms/galeri/'. $galeri->galeri_2_img);
                    }
                    $galeri->galeri_2_img = HelpersUser::uploadImage($request, 'galeri_2_img', 'back_assets/dist/img/cms/galeri/');
                }
                $galeri->galeri_2_deskripsi = $request->galeri_2_deskripsi;

               
                if($request->hasfile('galeri_3_img')) {
                    if($galeri->galeri_3_img != 'gapro-3.png') {
                        File::delete('back_assets/dist/img/cms/galeri/'. $galeri->galeri_3_img);
                    }
                    $galeri->galeri_3_img = HelpersUser::uploadImage($request, 'galeri_3_img', 'back_assets/dist/img/cms/galeri/');
                }
                $galeri->galeri_3_deskripsi = $request->galeri_3_deskripsi;

                $galeri->save();
            } else {
                $galeri             = new Keunggulan();
                $galeri->judul      = $request->judul;

                if($request->hasfile('galeri_1_img')) {
                    $galeri->galeri_1_img = HelpersUser::uploadImage($request, 'galeri_1_img', 'back_assets/dist/img/cms/galeri/');
                }
                $galeri->galeri_1_deskripsi = $request->galeri_1_deskripsi;

                if($request->hasfile('galeri_2_img')) {
                    $galeri->galeri_2_img = HelpersUser::uploadImage($request, 'galeri_2_img', 'back_assets/dist/img/cms/galeri/');
                }
                $galeri->galeri_2_deskripsi = $request->galeri_2_deskripsi;

               
                if($request->hasfile('galeri_3_img')) {
                    $galeri->galeri_3_img = HelpersUser::uploadImage($request, 'galeri_3_img', 'back_assets/dist/img/cms/galeri/');
                }
                $galeri->galeri_3_deskripsi = $request->galeri_3_deskripsi;

                $galeri->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Keunggulan Berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
