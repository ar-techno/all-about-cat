@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Produk')
@section('subheader','Pengaturan Produk Dijual')
@section('bread') <a href="">Produk</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/dropzone/dropzone.css')}}">
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
                        <table class="table table-striped m-b-0">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th data-breakpoints="xs">Nama Produk</th>
                                    <th data-breakpoints="xs">Keterangan</th>
                                    <th data-breakpoints="xs">Stock</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img title="klik untuk melihat kumpulan gambar" src="{{ asset('backend/assets/images/ecommerce/3.png')}}" width="80" alt="Product img"> <a class="waves-effect btn-sm" title="Tambah Gambar Produk" onclick="modal_img_show()"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a></td>
                                    <td>System Architect</td>
                                    <td>
                                        <table>
                                            <tr><td>Harga</td><td> : </td><td>Rp. 500.000</td></tr>
                                            <tr><td>Diskon</td><td> : </td><td> 5 %</td></tr>
                                        </table>
                                    </td>
                                    <td>61</td>
                                    <td><span class="tag tag-danger"> Suspended</span>
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