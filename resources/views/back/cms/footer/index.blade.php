@extends('layouts.admin.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Footer</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Footer</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.footer.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" value="{{ $footer !== null ? $footer->judul : '' }}" class="form-control" name="judul" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input type="text" value="{{ $footer !== null ? $footer->nama_perusahaan : '' }}" class="form-control" name="nama_perusahaan" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="copyright">Copyright</label>
                        <input type="text" value="{{ $footer !== null ? $footer->copyright : '' }}" class="form-control" name="copyright" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                    <h5>Kontak Kami</h5> 
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="alamat_icon">Alamat Icon</label>
                        <input type="file" class="form-control p-1" name="alamat_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer->gambar($footer->alamat_icon,'Location B.png')}}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="alamat_deskripsi">Alamat Deskripsi</label>
                        <input type="text" value="{{ $footer !== null ? $footer->alamat_deskripsi : '' }}" class="form-control" name="alamat_deskripsi" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email_icon">Email Icon</label>
                        <input type="file" class="form-control p-1" name="email_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer->gambar($footer->email_icon,'Mail B.png')}}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email_deskripsi">Email Deskripsi</label>
                        <input type="text" value="{{ $footer !== null ? $footer->email_deskripsi : '' }}" class="form-control" name="email_deskripsi" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="message_icon">Message Icon</label>
                        <input type="file" class="form-control p-1" name="message_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer->gambar($footer->message_icon,'Message B.png')}}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="message_deskripsi">Message Deskripsi</label>
                        <input type="text" value="{{ $footer !== null ? $footer->message_deskripsi : '' }}" class="form-control" name="message_deskripsi" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h5>Sosial Media</h5> 
                </div>
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="sosial_1_icon">Sosial Icon 1</label>
                        <input type="file" class="form-control p-1" name="sosial_1_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer->gambar($footer->sosial_1_icon,'whatsapp.png')}}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sosial_1_link">Sosial Link 1</label>
                        <input type="text" value="{{ $footer !== null ? $footer->sosial_1_link : '' }}" class="form-control" name="sosial_1_link">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sosial_2_icon">Sosial Icon 2</label>
                        <input type="file" class="form-control p-1" name="sosial_2_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer->gambar($footer->sosial_2_icon,'facebook.png')}}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sosial_2_link">Sosial Link 2</label>
                        <input type="text" value="{{ $footer !== null ? $footer->sosial_2_link : '' }}" class="form-control" name="sosial_2_link">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sosial_3_icon">Sosial Icon 3</label>
                        <input type="file" class="form-control p-1" name="sosial_3_icon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer->gambar($footer->sosial_3_icon,'facebook.png')}}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sosial_3_link">Sosial Link 3</label>
                        <input type="text" value="{{ $footer !== null ? $footer->sosial_3_link : '' }}" class="form-control" name="sosial_3_link" >
                    </div>
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
    jQuery.extend(jQuery.validator.messages, {
        required: "Field ini wajib diisi.",
    })

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'Ukuran maksimal 2 MB')

    $('#form-validation').validate({
        rules: {
            telepon: {
                required: true,
                maxlength: 17
            },
            deskripsi: {
                required: true,
                maxlength: 97
            },
            icon_alamat: {
                filesize: 2000000,
            },
            icon_telepon: {
                filesize: 2000000,
            },
            icon_email: {
                filesize: 2000000,
            },
            icon_marketplace: {
                filesize: 2000000,
            },
            sosial_1_gambar: {
                filesize: 2000000,
            },
            sosial_2_gambar: {
                filesize: 2000000,
            },
            sosial_3_gambar: {
                filesize: 2000000,
            },
            sosial_4_gambar: {
                filesize: 2000000,
            },
        },
        messages: {
            telepon: {
                maxlength: "Harap masukkan tidak lebih dari 17 karakter.",
            },
            deskripsi: {
                maxlength: "Harap masukkan tidak lebih dari 97 karakter.",
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
