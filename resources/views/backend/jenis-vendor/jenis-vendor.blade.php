@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Data Jenis Vendor')
@section('subheader','Pengaturan Jenis Vendor')
@section('bread') <a href="">Jenis Vendor</a> @endsection

@push('style')

@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">       
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Data Jenis Vendor</strong> <small>Data Jenis - Jenis Vendor</small> </h2>
                        <button type="button" class="btn btn-info waves-effect btn-sm"  onclick="modal_add_show()"><i class="zmdi zmdi-plus "></i> Tambah</button>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="2%">No</th>
                                    <th width="17%">Nama Vendor</th>
                                    <th>Layanan</th>
                                    <th width="5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="xl-pink">
                                    <th scope="row">1</th>
                                    <td>Toko Kucing</td>
                                    <td>
                                    	<div class="tag-list">
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
	                                    	<a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-plus"></i></a><a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-edit"></i></a>
	                                    </div>
	                                </td>
                                    <td><a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    </td>
                                </tr>
                                <tr class="xl-pink">
                                    <th scope="row">1</th>
                                    <td>Klinik Dokter Hewan</td>
                                    <td>
                                    	<div class="tag-list">
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
	                                    	<a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-plus"></i></a><a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-edit"></i></a>
	                                    </div>
	                                </td>
                                    <td><a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    </td>
                                </tr>
                                <tr class="xl-pink">
                                    <th scope="row">1</th>
                                    <td>Groomers / Salon</td>
                                    <td>
                                    	<div class="tag-list">
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
                                    		<a href="javascript:void(0);" title="Rp. 1000.000" class="btn btn-raised btn-success btn-simple btn-round">Faksin Rp. 1000.000 </a>
	                                    	<a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-plus"></i></a><a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-edit"></i></a>
	                                    </div>
	                                </td>
                                    <td><a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scriptbottom')

@endpush