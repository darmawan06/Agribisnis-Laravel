@extends('layouts.common.app')

@section('content')
        @include('layouts.common.components.navbar')
            <header id="header" class="position-relative">
                <img src="{{ $header->gambar()}}" class="position-absolute header-bg">
                <div class="header-bg-front position-absolute"></div>
                <div class="container px-3 px-md-5 h-full">
                    <div class="row h-full">
                        <div class="col-12 d-flex">
                            <h1 class="header1 header-title my-auto color-black">{{$header->judul}}</h1>
                        </div>
                    </div>
                </div>
            </header>
            <section id="keunggulanPerusahaan">
                <div class="container px-3 px-md-5">
                    <div class="row h-full">
                        <div class="col-12 h-full d-flex flex-column">
                            <h1 class="keper-title mx-auto header2 color-black">
                            {{-- input value di script javascript line paling bawah     --}}
                            </h1>
                            <ul class="keper-list d-flex mx-auto flex-column flex-md-row">
                                <li class="keper-item d-flex">
                                    <div class="d-flex flex-column w-full my-auto">
                                        <img src="{{$keunggulan->gambar($keunggulan->keunggulan_1_icon,'keper-1.png')}}" class="keper-item-logo mx-auto">
                                        <p class="keper-item-desc body1 color-black mx-auto">{{$keunggulan->keunggulan_1_deskripsi}}</p>
                                    </div>
                                </li>
                                <li class="keper-item d-flex flex-column">
                                    <div class="d-flex flex-column w-full my-auto">
                                        <img src="{{$keunggulan->gambar($keunggulan->keunggulan_2_icon,'keper-2.png')}}" class="keper-item-logo mx-auto">
                                        <p class="keper-item-desc body1 color-black mx-auto">{{$keunggulan->keunggulan_2_deskripsi}}</p>
                                    </div>
                                </li>
                                <li class="keper-item d-flex flex-column">
                                    <div class="d-flex flex-column w-full my-auto">
                                        <img src="{{$keunggulan->gambar($keunggulan->keunggulan_3_icon,'keper-3.png')}}" class="keper-item-logo mx-auto">
                                        <p class="keper-item-desc body1 color-black mx-auto">{{$keunggulan->keunggulan_3_deskripsi}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="keunggulanProduk">
                <div class="container px-3 px-md-5 h-full">
                    <div class="row h-full">
                        <div class="col-12 d-flex h-full flex-column flex-xl-row">
                            <div class="kepro-wrapper-img d-flex">
                                <img src="{{$keunggulanProduk->gambar()}}" class="kepro-img h-full mx-auto ml-md-auto">
                            </div>
                            <div class="kepro-wrapper-text m-auto">
                                <h1 class="kepro-title header2 color-black">
                                    {{-- input value di script javascript line paling bawah --}}
                                </h1>
                                <p class="kepro-desc body1">{{$keunggulanProduk->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gambarProses" class="background-secondary-one">
                <div class="container px-3 px-md-5 h-full d-flex">
                        <div class="col-12 d-flex flex-column my-auto">
                            <h1 class="gapro-title mx-auto header2 color-black">{{$galeri->judul}}</h1>
                            <ul class="gapro-list d-flex mx-auto flex-column flex-lg-row">
                                <li class="gapro-item d-flex">
                                    <div class="d-flex flex-column w-full my-auto position-relative h-full">
                                        <img src="{{$galeri->gambar($galeri->galeri_1_img,'gapro-1.png')}}" class="gapro-item-logo mx-auto">
                                        <div class="gapro-item-desc  position-absolute d-flex">
                                            <p class="body1 color-black m-auto">{{$galeri->galeri_1_deskripsi}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="gapro-item d-flex">
                                    <div class="d-flex flex-column w-full my-auto position-relative h-full">
                                        <img src="{{$galeri->gambar($galeri->galeri_2_img,'gapro-2.png')}}" class="gapro-item-logo mx-auto">
                                        <div class="gapro-item-desc  position-absolute d-flex">
                                            <p class="body1 color-black m-auto">{{$galeri->galeri_2_deskripsi}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="gapro-item d-flex">
                                    <div class="d-flex flex-column w-full my-auto position-relative h-full">
                                        <img src="{{$galeri->gambar($galeri->galeri_3_img,'gapro-3.png')}}" class="gapro-item-logo mx-auto">
                                        <div class="gapro-item-desc  position-absolute d-flex">
                                            <p class="body1 color-black m-auto">{{$galeri->galeri_3_deskripsi}}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </div>
            </section>

            <section id="tentangKami">
                <div class="container px-3 px-md-5 h-full">
                    <div class="row h-full">
                        <div class="col-12 h-full d-flex flex-column-reverse flex-lg-row">
                            <div class="teka-wrapper-text my-lg-auto">
                                <h2 class="header2 color-black teka-title">{{$tentangKami->judul}}</h2>
                                <p class="body1 color-black teka-desc">{{$tentangKami->deskripsi}}</p>
                            </div>
                            <div class="teka-wrapper-img h-full">
                                <img src="{{$tentangKami->gambar()}}" class="h-full teka-img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="kenapaHarusBeliKepadaKami" class="background-secondary-one">
                <div class="container px-3 px-md-5 h-full">
                    <div class="row h-full d-flex">
                        <div class="col-12 d-flex flex-column m-auto">
                            <h1 class="keha-title header2">{{$alasanMembeli->judul}}</h1>
                            <h4 class="keha-subtitle body1">{{$alasanMembeli->deskripsi}}</h4>
                            <ul class="keha-list d-flex w-full">
                                <li class="keha-item d-flex">
                                    <div class="d-flex flex-column m-auto">
                                        <img src="{{$alasanMembeli->gambar($alasanMembeli->alasan_1_icon,'keha-1.png')}}" class="keha-item-icon mx-auto">
                                        <p class="keha-item-desc mx-auto body1 color-black">{{$alasanMembeli->alasan_1_deskripsi}}</p>                                     
                                    </div>
                                </li>
                                <li class="keha-item d-flex">
                                    <div class="d-flex flex-column m-auto">
                                        <img src="{{$alasanMembeli->gambar($alasanMembeli->alasan_2_icon,'keha-2.png')}}" class="keha-item-icon mx-auto">
                                        <p class="keha-item-desc mx-auto body1 color-black">{{$alasanMembeli->alasan_2_deskripsi}}</p>                                     
                                    </div>
                                </li>
                                <li class="keha-item d-flex">
                                    <div class="d-flex flex-column m-auto">
                                        <img src="{{$alasanMembeli->gambar($alasanMembeli->alasan_3_icon,'keha-3.png')}}" class="keha-item-icon mx-auto">
                                        <p class="keha-item-desc mx-auto body1 color-black">{{$alasanMembeli->alasan_3_deskripsi}}</p>                                     
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimoni">
                <div class="container px-3 px-md-5">
                    .   
                    <div class="row">
                        <div class="col-12 px-5">
                            <h1 class="testimoni-title header2 color-black">{{$testimoniJudul->judul}}</h1>
                            <ul class="testimoni-list">
                                @foreach($testimoni as $element)
                                    <li class="d-flex flex-column flex-xl-row h-auto">
                                        <img src="{{$element->gambar()}}" class="testimoni-img">
                                        <div class="testimoni-wrapper-text">
                                            <h1 class="header3 color-black">{{$element->nama}}</h1>
                                            <p class="body1">{{$element->deskripsi}}</p>
                                        </div>
                                        <img src="{{asset('front_assets/img/testimoni-btn.png')}}" class="testimoni-btn">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="daftarProduk">
                <div class="dapro-bg"></div>
                <div class="container px-3 px-md-5">
                    <div class="col-12 px-5">
                            <h1 class="dapro-title header1 color-black">{{$produkJudul->judul}}</h1>
                            <ul class="dapro-list">
                                @foreach($produk as $element)
                                <li class="dapro-item d-flex flex-column flex-xl-row">
                                    <img src="{{$element->gambar()}}" class="dapro-img w-full h-full">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </section>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('front_assets/css/pages/home/index.css') }}">
@endpush

@push('js')
<script src="{{ asset('front_assets/js/pages/home/index.js') }}">

</script>
@endpush

@section('scriptsCustom')
    <script>
        const activeTagHTML = (tag, value)=>{
        $(tag).html(value.replace(/&lt;/g, '<').replace(/&gt;/g, '>') );
        }
        activeTagHTML('.keper-title','{{$keunggulan->judul}}');
        activeTagHTML('.kepro-title','{{$keunggulanProduk->judul}}');
    </script>
@endsection;
