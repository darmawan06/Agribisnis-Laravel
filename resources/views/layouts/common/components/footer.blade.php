<footer class="footer background-primary">
    <div class="footer-bg"></div>
    <div class="container px-3 px-lg-5">
        <div class="row h-full">
            <div class="col-12 col-lg-6 d-flex ">
                <div id="kontakKami" class="kontak-kami my-auto mx-auto ">
                    <h1 class="koka-title header1 color-black text-uppercase">{{$footer->judul}}</h1>
                    <h2 class="koka-subtitle body1 color-black">{{$footer->nama_perusahaan}}</h2>
                    <ul class="koka-list p-0 d-flex flex-column">
                        <li class="d-flex">
                            <img src="{{$footer->gambar($footer->alamat_icon,'Location B.png')}}" class="koka-icon">
                            <p class="koka-desc body1 color-black my-auto">{{$footer->alamat_deskripsi}}</p>
                        </li>
                        <li class="d-flex">
                            <img src="{{$footer->gambar($footer->email_icon,'Mail B.png')}}" class="koka-icon">
                            <p class="koka-desc body1 color-black my-auto">{{$footer->email_deskripsi}}</p>
                        </li>
                        <li class="d-flex">
                            <img src="{{$footer->gambar($footer->message_icon,'Comment B.png')}}" class="koka-icon">
                            <p class="koka-desc body1 color-black my-auto">{{$footer->message_deskripsi}}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column ml-auto my-auto footer-wrapper-konten">
                <h1 class="footer-title header1 color-black mx-auto ">Konten</h1>
                <div class="footer-konten-list d-flex flex-column mb-auto mx-auto ">
                    <a href="#daftarProduk" class="text-center color-black body1">Produk</a>
                    <a href="#gambarProses" class="text-center color-black body1">Gambar Proses</a>
                    <a href="#keunggulanPerusahaan" class="text-center color-black body1">Keunggulan Perusahaan</a>
                    <a href="#keunggulanProduk" class="text-center color-black body1">Keunggulan Produk</a>
                </div>
                <div class="footer-list d-flex mx-auto">
                    <a href="{{$footer->sosial_1_link}}"><img src="{{$footer->gambar($footer->sosial_1_icon,'whatsapp.png')}}" class="footer-list-icon"></a>
                    <a href="{{$footer->sosial_2_link}}"><img src="{{$footer->gambar($footer->sosial_2_icon,'facebook.png')}}" class="footer-list-icon"></a>
                    <a href="{{$footer->sosial_3_link}}"><img src="{{$footer->gambar($footer->sosial_3_icon,'youtube.png')}}" class="footer-list-icon"></a>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid  p-0">
        <div class="row">           
            <h4 class="footer-copyright col-12 body1 py-4">{{$footer->copyright}}</h4>
        </div>
    </div>
</footer>