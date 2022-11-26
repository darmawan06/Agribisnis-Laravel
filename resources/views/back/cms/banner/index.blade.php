@extends('layouts.admin.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Banner</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Banner</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            List Banner
        </div>
        <div class="float-right">
            <div class="btn-group">
                <a href="{{ route('back.cms.banner.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered" id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('back_assets/dist/js/script.js') }}"></script>
<script>
    var table;
    table = $('#table').DataTable({
        "responsive": true,
        "pagingType": "simple_numbers",
        "autoWidth": false,
        'pageLength': 10,
        "lengthMenu": [10, 25, 50, 100],
        "order": [['1', 'desc']],
        "processing": true,
        "language": {
            "processing": '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>'
        },
        "serverSide": true,
        "searching": true,
        "ajax": {
            "headers": {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            "url": "{{ route('api.back.cms.banner') }}",
            "dataType": "json",
            "type": "POST"
        },
        "columns": [
            {
                "data": "no",
                "orderable": false,
                "className": "align-middle"
            },
            {
                "data": "nama",
                "className": "align-middle"
            },
            {
                "data": "gambar",
                "className": "align-middle"
            },
            {
                "data": "actions",
                "orderable": false,
                "className": "text-center align-middle"
            },
        ]
    })
</script>
@endpush
