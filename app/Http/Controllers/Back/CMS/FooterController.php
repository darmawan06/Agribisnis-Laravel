<?php

namespace App\Http\Controllers\Back\CMS;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();

        return view('back.cms.footer.index', compact('footer'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $footer = Footer::first();

        try {
            if ($footer != null) {
                $footer->judul = $request->judul;
                $footer->nama_perusahaan = $request->nama_perusahaan;
                if($request->hasfile('alamat_icon')) {
                    if($footer->alamat_icon != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->alamat_icon);
                    }
                    $footer->alamat_icon = HelpersUser::uploadImage($request, 'alamat_icon', 'back_assets/dist/img/cms/footer/');
                }

                $footer->alamat_deskripsi = $request->alamat_deskripsi;
 
                 if($request->hasfile('email_icon')) {
                    if($footer->email_icon != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->email_icon);
                    }
                    $footer->email_icon = HelpersUser::uploadImage($request, 'email_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->email_deskripsi = $request->email_deskripsi;
 
                 if($request->hasfile('message_icon')) {
                    if($footer->message_icon != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->message_icon);
                    }
                    $footer->message_icon = HelpersUser::uploadImage($request, 'message_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->message_deskripsi = $request->message_deskripsi;
                
                if($request->hasfile('sosial_1_icon')) {
                    if($footer->sosial_1_icon != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->sosial_1_link);
                    }
                    $footer->sosial_1_icon = HelpersUser::uploadImage($request, 'sosial_1_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->sosial_1_link = $request->sosial_1_link;

                if($request->hasfile('sosial_2_icon')) {
                    if($footer->sosial_2_icon != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->sosial_2_link);
                    }
                    $footer->sosial_2_icon = HelpersUser::uploadImage($request, 'sosial_2_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->sosial_2_link = $request->sosial_2_link;

                if($request->hasfile('sosial_3_icon')) {
                    if($footer->sosial_3_icon != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/footer/'. $footer->sosial_3_link);
                    }
                    $footer->sosial_3_icon = HelpersUser::uploadImage($request, 'sosial_3_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->sosial_3_link = $request->sosial_3_link;
                $footer->copyright = $request->copyright;


                $footer->save();
            } else {
                $footer                     = new Footer();
                            $footer->judul = $request->judul;
                $footer->nama_perusahaan = $request->nama_perusahaan;
                if($request->hasfile('alamat_icon')) {
                    $footer->alamat_icon = HelpersUser::uploadImage($request, 'alamat_icon', 'back_assets/dist/img/cms/footer/');
                }

                $footer->alamat_deskripsi = $request->alamat_deskripsi;
 
                 if($request->hasfile('email_icon')) {
                    $footer->email_icon = HelpersUser::uploadImage($request, 'email_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->email_deskripsi = $request->email_deskripsi;
 
                 if($request->hasfile('message_icon')) {
                    $footer->message_icon = HelpersUser::uploadImage($request, 'message_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->message_deskripsi = $request->message_deskripsi;
                
                if($request->hasfile('sosial_1_icon')) {
                    $footer->sosial_1_icon = HelpersUser::uploadImage($request, 'sosial_1_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->sosial_1_link = $request->sosial_1_link;

                if($request->hasfile('sosial_2_icon')) {
                    $footer->sosial_2_icon = HelpersUser::uploadImage($request, 'sosial_2_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->sosial_2_link = $request->sosial_2_link;

                if($request->hasfile('sosial_3_icon')) {
                    $footer->sosial_3_icon = HelpersUser::uploadImage($request, 'sosial_3_icon', 'back_assets/dist/img/cms/footer/');
                }
                $footer->sosial_3_link = $request->sosial_3_link;
                $footer->copyright = $request->copyright;

                $footer->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Footer Berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
