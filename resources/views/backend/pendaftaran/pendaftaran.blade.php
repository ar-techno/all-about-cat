@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Pendaftar')
@section('subheader','Data Pendaftar Vendor Baru')
@section('bread') <a href="">Pendaftar Baru</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
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
                                <tr>
                                    <td>
                                        <a href="">KD 0001</a>
                                    </td>
                                    <td>Ar Wahyu Pradana</td>
                                    <td>
                                    	<div class="tag-list">
		                                    <a href="javascript:void(0);" onclick="vendor_show_toko()" class="btn btn-xs btn-raised btn-primary btn-simple btn-round">Toko Kucing</a>
		                                    <a href="javascript:void(0);" onclick="vendor_show_klinik()" class="btn btn-xs btn-raised btn-success btn-simple btn-round">Klinik Dokter Hewan</a>
		                                    <a href="javascript:void(0);" onclick="vendor_show_groomers()" class="btn btn-xs btn-raised btn-warning btn-simple btn-round">Groomers</a>
		                                </div>
		                            </td>
                                    <td>Jl.Purnama V, Pandau Jaya, Kec. Siak Hulu, Kampar, Riau 28284, Indonesia</td>
                                    <td>
                                        <a href="javascript:void(0);" onclick="modal_comfirm_show()" class="btn btn-xs waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
	@include('backend.pendaftaran.ar-form.pendaftaran')
	@include('backend.pendaftaran.ar-form.vendor-toko-kucing')
	@include('backend.pendaftaran.ar-form.vendor-klinik-dokter')
	@include('backend.pendaftaran.ar-form.vendor-groomers')
@endsection
@push('scriptbottom')
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js --> 
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 
<script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script> 
<script src="{{ asset('backend/assets/bundles/footable.bundle.js')}}"></script>

<script type="text/javascript">
'use strict';
$(document).ready(function() {
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

function vendor_show_toko() {
    $('#ar-modal-toko').modal('show');
    $('.modal-backdrop').hide();    
}

function vendor_show_klinik() {
    $('#ar-modal-klinik').modal('show');
    $('.modal-backdrop').hide();    
}
function vendor_show_groomers() {
    $('#ar-modal-groomers').modal('show');
    $('.modal-backdrop').hide();    
}
</script>

@endpush