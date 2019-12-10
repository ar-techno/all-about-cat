@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Album Toko Kucing')
@section('subheader','Semua Gambar Di Toko Kucing')
@section('bread') <a href="">All About Cat</a> @endsection

@push('style')
<link href="{{asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/plugins/light-gallery/css/lightgallery.css')}}">
@endpush
@push('scripthead')
@endpush
@section('content')
<div class="container-fluid"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Gallery</strong> <small>All pictures <a href="https://pexels.com/" target="_blank">AAC</a></small> </h2>
                    </div>
                    <div class="body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/1.jpg')}}"> <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-1.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/2.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-2.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/3.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-3.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/4.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-4.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/5.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-5.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/6.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-6.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/7.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-7.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/8.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-8.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/9.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-9.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/10.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-10.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/11.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-11.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/12.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-12.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/13.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-13.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/14.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-14.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="{{asset('backend/assets/images/image-gallery/15.jpg')}}" > <img class="img-fluid img-thumbnail" src="{{asset('backend/assets/images/image-gallery/thumb/thumb-15.jpg')}}" alt=""> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	@include('backend.identitas-perusahaan.ar-form.identitas')
	@include('backend.identitas-perusahaan.ar-form.identitas-img')
@endsection
@push('scriptbottom')
<script src="{{asset('backend/assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/medias/image-gallery.js')}}"></script>
@endpush