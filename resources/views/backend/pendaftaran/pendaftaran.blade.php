@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Pendaftar')
@section('subheader','Data Pendaftar Vendor Baru')
@section('bread') <a href="">Pendaftar Baru</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/ecommerce.css')}}">
@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                    	<p>Periksa Setiap Pendaftar Dengan Cermat</p>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped m-b-0">
                            <thead>
                                <tr>
                                    <th>ID Daftar</th>
                                    <th>Nama Pemilik</th>
                                    <th data-breakpoints="xs">Jenis Vendor</th>
                                    <th data-breakpoints="xs">Detail Alamat Pusat</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pendaftar as $p)
                                <tr>
                                    <td>
                                        <a href="">KD {{$p->id}}</a>
                                    </td>
                                    <td>{{$p->User->name}}</td>
                                    <td>
                                    	<div class="tag-list">
                                        @foreach($vendor as $v)
		                                    <a href="#" onclick="showPendaftar('{{$v->id}}')" class="btn btn-xs btn-raised btn-success btn-simple btn-round">{{$v->jenisvendor->nama_vendor}}</a>
                                        @endforeach
		                                </div>
		                            </td>
                                    <td>{{$p->alamat}}</td>
                                    <td>
                                        <a href="javascript:void(0);" onclick="showPendaftar('{{$p->id}}')" class="btn btn-xs waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
	@include('backend.pendaftaran.ar-form.pendaftaran')
	@include('backend.pendaftaran.ar-form.vendor-toko-kucing')
	@include('backend.pendaftaran.ar-form.vendor-klinik-dokter')
	@include('backend.pendaftaran.ar-form.vendor-groomers')
@endsection
@push('scriptbottom')

<script type="text/javascript">
// vendor_show_toko
// vendor_show_klinik
// vendor_show_groomers
    
'use strict';
$(document).ready(function() {
    console.clear();
    $('.table').footable({
        "paging": {
            "enabled": true
        },
        "sorting": {
            "enabled": true
        }
    });
});

function modal_comfirm_show() {
    $('#ar-modal-confirm').modal('show');
    $('.modal-backdrop').hide();    
}


function showPendaftar(id_vendor) {
        var url  = "{{ url('data-pendaftar/show-edit') }}"+'/'+id_vendor;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {
              $('#ar-modal-'+e.kode_vendor+'').modal('show');
              $('#form-edit- #nama_pemilik').val(e.nama_pemilik);
              $('#form-edit- #tgl_daftar').val(e.tgl_daftar);
              $('#form-edit- #alamat').val(e.alamat);
              $('#form-edit- #akses_group option[value='+ e.akses_group +']').prop("selected", true).change();
              document.getElementById("foto_ktp").src = "http://1.bp.blogspot.com/-cKbR2Cw8BLU/VrLaPvhz9pI/AAAAAAAAAcE/Pe9LhaTN1sY/s1600/Scan%2BKTP.JPG";
              document.getElementById("foto_pemilik").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQSNKQX4HegbjrTCltM_Z_ziPjL_6ADBE_JGARetZ55NhqBBzsuA&s";
              $('#form-edit-'+e.kode_vendor+' #id').val(e.id);
              $('#form-edit-'+e.kode_vendor+' #nama_toko').val(e.nama_toko);
              $('#form-edit-'+e.kode_vendor+' #jenis_vendor').val(e.jenis_vendor);
              $('#form-edit-'+e.kode_vendor+' #no_telp').val(e.no_telp);
              $('#form-edit-'+e.kode_vendor+' #no_hp').val(e.no_hp);
              $('#form-edit-'+e.kode_vendor+' #email').val(e.email);
              $('#form-edit-'+e.kode_vendor+' #instagram').val(e.instagram);
              $('#form-edit-'+e.kode_vendor+' #alamat_toko').val(e.alamat_toko);
              $('#form-edit-'+e.kode_vendor+' #izin_usaha').val(e.izin_usaha);
              $('#form-edit-'+e.kode_vendor+' #nid').val(e.nid);
              $('#ar-modal-'+e.kode_vendor+' #form-edit-'+e.kode_vendor+' #Ostatus'+e.kode_vendor+' option[value='+ e.status +']').prop("selected", true).change();
            
              $('.modal-backdrop').hide();    

            },
            error : function(e){
             showErrorMessage();
            }
        });
}

// Simpan Data Menu
function editPendaftar(from) {
        var form = $('#form-edit-'+from)[0];
        var data = new FormData(form);
        var url  = "{{ url('data-pendaftar/edit-data') }}";
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
                    showAjaxLoaderSuccesMessage();
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
    }
// Batas
</script>
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js --> 
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 
<script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script> 
<script src="{{ asset('backend/assets/bundles/footable.bundle.js')}}"></script>

@endpush