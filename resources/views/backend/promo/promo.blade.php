@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Promo')
@section('subheader','Promo Produk')
@section('bread') <a href="">Produk</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/custom-produk.css')}}">
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
                        <button type="button" class="btn btn-info waves-effect btn-sm"  onclick="modal_add_show()"><i class="zmdi zmdi-plus "></i> Tambah</button>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th data-breakpoints="sm xs">Keterangan</th>
                                    <th data-breakpoints="xs">Harga</th>
                                    <th data-breakpoints="xs md">Stock</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-ember">Low Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="container">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="100px" alt="Product img">
                                           <a class="btn " onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div>
                                        
                                    </td>
                                    <td>Simple Black Clock</td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
	@include('backend.produk.ar-form.produk')
    @include('backend.produk.ar-form.produk-img')
@endsection
@push('scriptbottom')
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js --> 
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 
<script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script> 
<script src="{{ asset('backend/assets/bundles/footable.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/dropzone/dropzone.js')}}"></script> <!-- Dropzone Plugin Js --> 

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

function modal_add_show() {
    $('#ar-modal-add').modal('show');
    $('.modal-backdrop').hide();    
}
function modal_img_show() {
    $('#ar-modal-img').modal('show');
    $('.modal-backdrop').hide();    
}
</script>

@endpush