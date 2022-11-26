<?php

namespace App\Http\Controllers\Back\CMS;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\Keunggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class KeunggulanController extends Controller
{
    public function index()
    {
        $keunggulan = Keunggulan::first();

        return view('back.cms.keunggulan.index', compact('keunggulan'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $keunggulan = Keunggulan::first();

        try {
            if ($keunggulan != null) {
                $keunggulan->judul        = $request->judul;

                if($request->hasfile('keunggulan_1_icon')) {
                    if($keunggulan->keunggulan_1_icon != 'keper-icon.png') {
                        File::delete('back_assets/dist/img/cms/keunggulan/'. $keunggulan->keunggulan_1_icon);
                    }
                    $keunggulan->keunggulan_1_icon = HelpersUser::uploadImage($request, 'keunggulan_1_icon', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->keunggulan_1_deskripsi = $request->keunggulan_1_deskripsi;

                
                if($request->hasfile('keunggulan_2_icon')) {
                    if($keunggulan->keunggulan_2_icon != 'keper-icon.png') {
                        File::delete('back_assets/dist/img/cms/keunggulan/'. $keunggulan->keunggulan_2_icon);
                    }
                    $keunggulan->keunggulan_2_icon = HelpersUser::uploadImage($request, 'keunggulan_2_icon', 'back_assets/dist/img/cms/keunggulan/');
                }
                $keunggulan->keunggulan_2_deskripsi = $request->keunggulan_2_deskripsi;

               
                if($request->hasfile('keunggulan_3_icon')) {
                    if($keunggulan->keunggulan_3_icon != 'keper-icon.png') {
                        File::delete('back_assets/dist/img/cms/keunggulan/'. $keunggulan->keunggulan_3_icon);
                    }
                    $keunggulan->keunggulan_3_icon = HelpersUser::uploadImage($request, 'keunggulan_3_icon', 'back_assets/dist/img/cms/keunggulan/');
                }
                $keunggulan->keunggulan_3_deskripsi = $request->keunggulan_3_deskripsi;

                $keunggulan->save();
            } else {
                $keunggulan             = new Keunggulan();
                $keunggulan->judul      = $request->judul;

                if($request->hasfile('keunggulan_1_icon')) {
                    $keunggulan->keunggulan_1_icon = HelpersUser::uploadImage($request, 'keunggulan_1_icon', 'back_assets/dist/img/cms/keunggulan/');
                }
                $keunggulan->keunggulan_1_deskripsi = $request->keunggulan_1_deskripsi;

                if($request->hasfile('keunggulan_2_icon')) {
                    $keunggulan->keunggulan_2_icon = HelpersUser::uploadImage($request, 'keunggulan_2_icon', 'back_assets/dist/img/cms/keunggulan/');
                }
                $keunggulan->keunggulan_2_deskripsi = $request->keunggulan_2_deskripsi;

               
                if($request->hasfile('keunggulan_3_icon')) {
                    $keunggulan->keunggulan_3_icon = HelpersUser::uploadImage($request, 'keunggulan_3_icon', 'back_assets/dist/img/cms/keunggulan/');
                }
                $keunggulan->keunggulan_3_deskripsi = $request->keunggulan_3_deskripsi;

                $keunggulan->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Keunggulan Berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
