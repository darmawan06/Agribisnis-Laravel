@extends('layouts.admin.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Testimoni</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('back.cms.testimoni.index') }}">Testimoni</a></li>
                <li class="breadcrumb-item active">Edit Testimoni</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input value="{{ $testimoni->nama }}" type="text" id="nama" name="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="deskripsi">Isi Testimoni</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="4" required>{{ $testimoni->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="deskripsi">Gambar Testimoni</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <small class="text-danger d-block">Maksimal upload gambar 2 mb</small>
                        </div>
                    </div>
                    @if ($testimoni->gambar !== "noimage.png")
                    <div class="col-md-12">
                        <img class="img-fluid" src="{{ $testimoni->gambar() }}" alt="{{ $testimoni->nama }}">
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
</div>
@endsection

@push('js')
<script>
    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'Ukuran maksimal 2 MB')

    $('#form-validation').validate({
        rules: {
            nama: {
                required: true,
            },
            deskripsi: {
                required: true,
                maxlength: 360
            },
            gambar: {
                filesize: 2000000,
            },
        },
        messages: {
            nama: {
                required: "Field wajib diisi!",
            },
            deskripsi: {
                required: "Field wajib diisi!",
                maxlength: "Harap masukkan tidak lebih dari 360 karakter.",
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
