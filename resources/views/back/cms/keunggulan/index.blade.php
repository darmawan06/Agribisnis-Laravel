@extends('layouts.admin.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Keunggulan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Keunggulan</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.keunggulan.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul Section</label>
                        <input type="text" value="{{ $keunggulan !== null ? $keunggulan->judul : '' }}" class="form-control" name="judul" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_1_icon">icon Keunggulan 1</label>
                        <input type="file" class="form-control p-1" name="keunggulan_1_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $keunggulan->gambar($keunggulan->keunggulan_1_icon, 'keper-1.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_1_deskripsi">Deskripsi Keunggulan 1</label>
                        <input type="text" value="{{ $keunggulan !== null ? $keunggulan->keunggulan_1_deskripsi : '' }}" class="form-control" name="keunggulan_1_deskripsi" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_2_icon">icon Keunggulan 2</label>
                        <input type="file" class="form-control p-1" name="keunggulan_2_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $keunggulan->gambar($keunggulan->keunggulan_2_icon, 'keper-2.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_2_deskripsi">Deskripsi Keunggulan 2</label>
                        <input type="text" value="{{ $keunggulan !== null ? $keunggulan->keunggulan_2_deskripsi : '' }}" class="form-control" name="keunggulan_2_deskripsi" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_3_icon">icon Keunggulan 3</label>
                        <input type="file" class="form-control p-1" name="keunggulan_3_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $keunggulan->gambar($keunggulan->keunggulan_3_icon, 'keper-3.png') }}" target="_blank">Preview Gambar</a>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_3_deskripsi">Deskripsi Keunggulan 3</label>
                        <input type="text" value="{{ $keunggulan !== null ? $keunggulan->keunggulan_3_deskripsi : '' }}" class="form-control" name="keunggulan_3_deskripsi" required>
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
            keunggulan_1_deskripsi: {
                required: true,
                maxlength: 27
            },
            keunggulan_2_deskripsi: {
                required: true,
                maxlength: 27
            },
            keunggulan_3_deskripsi: {
                required: true,
                maxlength: 27
            },
        },
        messages: {
            judul: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 50 karakter.",
            },
            keunggulan_1_deskripsi: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 27 karakter.",
            },
            keunggulan_2_deskripsi: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 27 karakter.",
            },
            keunggulan_3_deskripsi: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 27 karakter.",
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
