@extends('layouts.admin.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Galeri</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Galeri</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.galeri.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul Section</label>
                        <input type="text" value="{{ $galeri !== null ? $galeri->judul : '' }}" class="form-control" name="judul" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="galeri_1_img">Image Galeri 1</label>
                        <input type="file" class="form-control p-1" name="galeri_1_img">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $galeri->gambar($galeri->galeri_1_img, 'gapro-1.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="galeri_1_deskripsi">Deskripsi Keunggulan 1</label>
                        <input type="text" value="{{ $galeri !== null ? $galeri->galeri_1_deskripsi : '' }}" class="form-control" name="galeri_1_deskripsi" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="galeri_2_img">Image Galeri 2</label>
                        <input type="file" class="form-control p-1" name="galeri_2_img">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $galeri->gambar($galeri->galeri_2_img, 'gapro-2.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="galeri_2_deskripsi">Deskripsi Keunggulan 2</label>
                        <input type="text" value="{{ $galeri !== null ? $galeri->galeri_2_deskripsi : '' }}" class="form-control" name="galeri_2_deskripsi" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="galeri_3_img">Image Galeri 3</label>
                        <input type="file" class="form-control p-1" name="galeri_3_img">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $galeri->gambar($galeri->galeri_3_img, 'gapro-3.png') }}" target="_blank">Preview Gambar</a>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="galeri_3_deskripsi">Deskripsi Keunggulan 3</label>
                        <input type="text" value="{{ $galeri !== null ? $galeri->galeri_3_deskripsi : '' }}" class="form-control" name="galeri_3_deskripsi" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success float-right">Simpan</button>
        </div>
    </form>
</div>
@endsection

@push('js')
<script>
    $('#form-validation').validate({
        rules: {
            judul: {
                required: true,
                maxlength: 50
            },
            galeri_1_deskripsi: {
                required: true,
                maxlength: 30
            },
            galeri_2_deskripsi: {
                required: true,
                maxlength: 30
            },
            galeri_3_deskripsi: {
                required: true,
                maxlength: 30
            },
        },
        messages: {
            judul: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 50 karakter.",
            },
            galeri_1_deskripsi: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 30 karakter.",
            },
            galeri_2_deskripsi: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 30 karakter.",
            },
            galeri_3_deskripsi: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 30 karakter.",
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error)
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    })
</script>
@endpush
