@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Data Jenis Vendor')
@section('subheader','Pengaturan Jenis Vendor')
@section('bread') <a href="">Jenis Vendor</a> @endsection

@push('style')
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">       
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Data Jenis Vendor</strong> <small>Data Jenis - Jenis Vendor</small> </h2>
                        <button type="button" class="btn btn-info waves-effect btn-sm"  onclick="modal_add_vendors()"><i class="zmdi zmdi-plus "></i> Tambah</button>
                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="tableVendor">
                            <thead>
                                <tr>
                                    <th width="17%">Nama Vendor</th>
                                    <th width="17%">Kode</th>
                                    <th width="5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Layanan</strong>  <small>Tambahkan Data Layanan</small> </h2>
                        <button type="button" class="btn btn-info waves-effect btn-sm"  onclick="modal_add_layanan()"><i class="zmdi zmdi-plus "></i> Tambah</button>

                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="tableLayanan">
                            <thead>
                                <tr>
                                    <th>Nama Layanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('backend.jenis-vendor.ar-form.jenis-vendor')
    @include('backend.jenis-vendor.ar-form.jenis-layanan')
@endsection
@push('scriptbottom')
<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('backend/assets/bundles/datatablescripts.bundle.js')}}"></script>

<script type="text/javascript">
    $(document).ready( function () {
        show();
        showLayanan();
    });
    function show() {
        $('#tableVendor').DataTable({
            destroy: true,
           processing: true,
           serverSide: true,
           "searching": false,
           "ordering": false,
           "lengthChange": false,
           "paging": false,
           ajax: '{{ url("jenis-vendor/show") }}',
           columns: [
                        { data: 'nama_vendor'},
                        { data: 'kode'},
                        { data: 'action'}
                    ]
        });
    }
    function confirmVendor(id) {
        swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
        }, function () {
                $.ajax({
                headers: {'X-CSRF-TOKEN': $('#ar-modal-form input[name="_token"]').val()},
                type: "POST",
                url: "{{ url('jenis-vendor/del-vendor') }}"+'/'+id,
                timeout: 600000,
                success : function(e) {
                        show();
                        swal({
                                title: "Deleted!",
                                text: "Your imaginary file has been deleted.",
                                timer: 1500,
                                type: "success",
                                showConfirmButton: false,
                            });
                },
                error : function(e){
                    showErrorMessage();
                }
                });
        });
    }
    function showLayanan() {
        $('#tableLayanan').DataTable({
            destroy: true,
           processing: true,
           serverSide: true,
           "lengthChange": false,
           ajax: '{{ url("jenis-vendor/show-layanan") }}',
           columns: [
                        { data: 'nama_layanan'},
                        { data: 'action'}
                    ]
        });
    }
    function confirmLayanan(id) {
        swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
        }, function () {
                $.ajax({
                headers: {'X-CSRF-TOKEN': $('#ar-modal-layanan input[name="_token"]').val()},
                type: "POST",
                url: "{{ url('jenis-vendor/del-layanan') }}"+'/'+id,
                timeout: 600000,
                success : function(e) {
                        showLayanan();
                        swal({
                                title: "Deleted!",
                                text: "Your imaginary file has been deleted.",
                                timer: 1500,
                                type: "success",
                                showConfirmButton: false,
                            });
                },
                error : function(e){
                    showErrorMessage();
                }
                });
        });
    }

    function modal_add_vendors() {
       $('#ar-modal-jenis-form').modal('show');
        $('.modal-backdrop').hide();
    }
    function modal_add_layanan() {
       $('#ar-modal-jenis-layanan').modal('show');
       $('.modal-backdrop').hide();
    }
    // Simpan Data Vendors
        $('#save_vendor').on('click', function (e){
            var form = $('#ar-modal-form')[0];
            var data = new FormData(form);
            if ($('#ar-modal-form #id').val() == '') {
                var url  = "{{ url('jenis-vendor/save-vendor') }}";
            }
            else
            {
                var url  = "{{ url('jenis-vendor/edit-vendor') }}";
            }
            $.ajax({
                processData: false,
                contentType: false,
                cache: false,
                type: "POST",
                enctype: 'multipart/form-data',
                url: url,
                data: data,
                timeout: 600000,
                success : function(e) {
                    if (e == 1) {
                        show();
                        showSuccessMessage();
                        $('#ar-modal-jenis-form').modal('hide');
                    }
                    else
                    {
                        showErrorMessage();
                    }                  
                },
                error : function(e){
                 showErrorMessage();
                }
            });
        });
    // Batas
    // Simpan Data Layanan
        $('#save_layanan').on('click', function (e){
            var form = $('#ar-modal-layanan')[0];
            var data = new FormData(form);
            if ($('#ar-modal-layanan #id').val() == '') {
                var url  = "{{ url('jenis-vendor/save-layanan') }}";
            }
            else
            {
                var url  = "{{ url('jenis-vendor/edit-layanan') }}";
            }
            $.ajax({
                processData: false,
                contentType: false,
                cache: false,
                type: "POST",
                enctype: 'multipart/form-data',
                url: url,
                data: data,
                timeout: 600000,
                success : function(e) {
                    if (e == 1) {
                        showLayanan();
                        showSuccessMessage();
                        $('#ar-modal-jenis-layanan').modal('hide');
                        document.getElementById("ar-modal-layanan").reset();
                    }
                    else
                    {
                        showErrorMessage();
                    }                  
                },
                error : function(e){
                 showErrorMessage();
                }
            });
        });
    // Batas
    // Edit Vendors
    function editVendor(id) {
        $('#ar-modal-jenis-form').modal('show');
        $('.modal-backdrop').hide();    

        var url  = "{{ url('jenis-vendor/show-editvendor') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {
              $('#ar-modal-form #id').val(e.id);
              $('#ar-modal-form #kd_vendor').val(e.kode);
              $('#ar-modal-form #nm_vendor').val(e.nama_vendor);
            },
            error : function(e){
             showErrorMessage();
            }
        });
     }
     // Batas
    // Edit Vendors
    function editLayanan(id) {
        $('#ar-modal-jenis-layanan').modal('show');
        $('.modal-backdrop').hide();    

        var url  = "{{ url('jenis-vendor/show-editlayanan') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {
              $('#ar-modal-layanan #id').val(e.id);
              $('#ar-modal-layanan #nm_layanan').val(e.nama_layanan);
            },
            error : function(e){
             showErrorMessage();
            }
        });
     }
     // Batas
    $('#ar-modal-jenis-form').on('hidden.bs.modal', function(event){
         $(this).find('form')[0].reset();
    });
    $('#ar-modal-jenis-layanan').on('hidden.bs.modal', function(event){
         $(this).find('form')[0].reset();
    });
</script>
<script src="{{asset('backend/assets/js/pages/tables/jquery-datatable.js')}}"></script>

@endpush