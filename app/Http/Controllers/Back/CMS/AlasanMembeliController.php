<?php

namespace App\Http\Controllers\Back\CMS;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\AlasanMembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AlasanMembeliController extends Controller
{
    public function index()
    {
        $alasanMembeli = AlasanMembeli::first();

        return view('back.cms.alasan-membeli.index', compact('alasanMembeli'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $alasanMembeli = AlasanMembeli::first();

        try {
            if ($alasanMembeli != null) {
                $alasanMembeli->judul        = $request->judul;
                $alasanMembeli->deskripsi    = $request->deskripsi;

                if($request->hasfile('alasan_1_icon')) {
                    if($alasanMembeli->alasan_1_icon != 'keha-icon.png') {
                        File::delete('back_assets/dist/img/cms/alasan-membeli/'. $alasanMembeli->alasan_1_icon);
                    }
                    $alasanMembeli->alasan_1_icon = HelpersUser::uploadImage($request, 'alasan_1_icon', 'back_assets/dist/img/cms/alasan-membeli/');
                }

                $alasanMembeli->alasan_1_deskripsi      = $request->alasan_1_deskripsi;

                 if($request->hasfile('alasan_2_icon')) {
                    if($alasanMembeli->alasan_2_icon != 'keha-icon.png') {
                        File::delete('back_assets/dist/img/cms/alasan-membeli/'. $alasanMembeli->alasan_2_icon);
                    }
                    $alasanMembeli->alasan_2_icon = HelpersUser::uploadImage($request, 'alasan_2_icon', 'back_assets/dist/img/cms/alasan-membeli/');
                }
                $alasanMembeli->alasan_2_deskripsi      = $request->alasan_2_deskripsi;

                 if($request->hasfile('alasan_3_icon')) {
                    if($alasanMembeli->alasan_3_icon != 'keha-icon.png') {
                        File::delete('back_assets/dist/img/cms/alasan-membeli/'. $alasanMembeli->alasan_3_icon);
                    }
                    $alasanMembeli->alasan_3_icon = HelpersUser::uploadImage($request, 'alasan_3_icon', 'back_assets/dist/img/cms/alasan-membeli/');
                }
                $alasanMembeli->alasan_3_deskripsi      = $request->alasan_3_deskripsi;

                $alasanMembeli->save();
            } else {
                $alasanMembeli             = new AlasanMembeli();
                $alasanMembeli->judul      = $request->judul;
                $alasanMembeli->deskripsi  = $request->deskripsi;

               if($request->hasfile('alasan_1_icon')) {
                    $alasanMembeli->alasan_1_icon = HelpersUser::uploadImage($request, 'alasan_1_icon', 'back_assets/dist/img/cms/alasan-membeli/');
                }

                $alasanMembeli->alasan_1_deskripsi      = $request->alasan_1_deskripsi;

                 if($request->hasfile('alasan_2_icon')) {
                    $alasanMembeli->alasan_2_icon = HelpersUser::uploadImage($request, 'alasan_2_icon', 'back_assets/dist/img/cms/alasan-membeli/');
                }
                $alasanMembeli->alasan_2_deskripsi      = $request->alasan_2_deskripsi;

                 if($request->hasfile('alasan_3_icon')) {
                    $alasanMembeli->alasan_3_icon = HelpersUser::uploadImage($request, 'alasan_3_icon', 'back_assets/dist/img/cms/alasan-membeli/');
                }
                $alasanMembeli->alasan_3_deskripsi      = $request->alasan_3_deskripsi;

                $alasanMembeli->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Alasan Membeli Berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
