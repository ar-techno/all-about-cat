@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Identitas Perusahaan')
@section('subheader','Pengaturan Identitas Perusahaan')
@section('bread') <a href="">All About Cat</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="preview col-lg-4 col-md-12">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="product_1"><img src="{{asset('backend/assets/images/ecommerce/1.png')}}" class="img-fluid rounded img-raised" /></div>
                                     <div class="action">
                                	<button type="button" class="btn btn-info waves-effect btn-sm"  onclick="modal_img_show()"><i class="zmdi zmdi-edit "></i></button>
                                </div>
                                </div>
                            </div>
                            <div class="details col-lg-8 col-md-12">
                                <h3 class="product-title m-b-0">All About Cat</h3>
                                <!-- <h4 class="price m-t-0">Hari Kerja: <span class="col-amber">180</span></h4> -->
                                <hr>
                                <p class="product-description">Deskripsi Toko Anda Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p class="vote"><strong>Slogan</strong> Ini adalah Slogan Toko Anda</p>
                               <div class="row clearfix social-widget">                   
                                    <div class="col-lg-6 col-md-4">
                                        <div class="content">
                                                <small class="text-muted">Website: </small>
                                                <p>www.aac.com</p>
                                                <hr>
                                                <small class="text-muted"> Favicon:</small>
                                                <p> <div class="preview-pic tab-content">
                                                	<div class="tab-pane active" id="product_1"><img src="{{asset('backend/assets/images/icon/store.ico')}}" class="img-fluid rounded img-raised" /></div>
                                                	</div>
                                                </p>
                                                <small class="text-muted">Email Kantor: </small>
                                                <p>arwahyu01@gmail.com</p>
                                                <hr>
                                                <small class="text-muted">Phone: </small>
                                                <p>~ 0822-8324-8796</p>
                                                <hr>
                                                <small class="text-muted"> <a title="instagram" href="#" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i> <span style="color: #000;">Instagram</span> </a> </small>
                                                <p>~ @arwahyupradana</p>
                                                <hr>
                                                <small class="text-muted"> <a title="instagram" href="#" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter"></i> <span style="color: #000;">Twitter</span> </a> </small>
                                                <p>~ @arwahyupradana</p>
                                                <hr>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4">
                                            <div class="content">
                                                <table class="table">
                                                    <thead>
                                                        <tr><th>Hari Kerja</th><th>Waktu</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Senin</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Selasa</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rabu</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kamis</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jum'at</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sabtu</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Minggu</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="action">
                                	<button type="button" class="btn btn-info waves-effect m-r-20"  onclick="modal_edit_show()">Edit Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description">Alamat</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Tentang AAC</a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="body">                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <small class="text-muted">Alamat Perusahaan: </small>
                                <p>Unnamed Road, Pandau Jaya, Kec. Siak Hulu, Kampar, Riau 28284, Indonesia</p>
                                <hr>
                            </div>
                            <div class="tab-pane" id="about">
                                <h6>Where does it come from?</h6>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                                <p>AAC berdiri : 20 Desember 2019</p>
                            </div>
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
<script type="text/javascript">
	function modal_edit_show() {
		$('#ar-modal-edit').modal('show');
		$('.modal-backdrop').hide();	
	}
	function modal_img_show() {
		$('#ar-modal-img').modal('show');
		$('.modal-backdrop').hide();	
	}
</script>
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js --> 
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 
<script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script> 
@endpush