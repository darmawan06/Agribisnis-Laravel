<section class="p-3">
    <form id="form-validation" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-12">
            <label for="transaksi">No Faktur</label>
            <input class="form-control form-control-sm" type="text">
        </div>
        <div class="form-group mb-12">
            <label for="transaksi">Pelanggan</label>
            <input class="form-control form-control-sm" type="text">
        </div>
        <div class="form-group mb-12">
            <label for="transaksi">Lunas</label>
            <input class="form-control form-control-sm" type="text">
        </div>
        <div class="form-group mb-12">
            <label for="transaksi">Jumlah Hutang</label>
            <input class="form-control form-control-sm" type="text">
        </div>
        <div class="form-group mb-12">
            <label for="transaksi">Jatuh Tempo</label>
            <input class="form-control form-control-sm" type="text">
        </div>
        <div class="form-group mb-12">
            <label for="transaksi">Item</label>
            <input class="form-control form-control-sm" type="text">
        </div>
    </form>
</section>

<hr class="modal-divider">

<section class="p-2 d-flex justify-content-end">
    <button data-dismiss="modal" class="btn btn-custom red px-3 ml-3">
        <i class="fas fa-times-circle mr-2"></i>
        Keluar
    </button>
    <button id="refresh" class="btn btn-custom blue px-3 ml-3">
        <i class="fas fa-redo mr-2"></i>
        Kosongkan
    </button>
    <button id="btn-save" class="btn btn-custom green px-3 ml-3">
        <i class="fas fa-save mr-2"></i>
        Simpan
    </button>
</section>

<script>
    $('#form-validation').validate({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
            element.closest('.col-md-9').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    })

    $('body').on('click', '#refresh', function() {
        $('input').val('')
    })
</script>
