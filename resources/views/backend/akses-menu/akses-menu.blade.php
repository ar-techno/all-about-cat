@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Akses Menu')
@section('subheader','Pengaturan Menu Akses')
@section('bread') <a href="">Akses Menu</a> @endsection

@push('style')

@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">       
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Main Menu</strong>  <small>Setting akses untuk main menu</small> </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Menu</th>
                                    <th>Akses Group</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Sub Menu</strong>  <small>Setting akses untuk sub menu</small> </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sub Menu</th>
                                    <th>Akses Group</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>  <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
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