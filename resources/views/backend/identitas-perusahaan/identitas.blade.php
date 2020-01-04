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
                                    <div class="tab-pane active" id="product_1"><img src="{{url('data-identitas/getImageLogo/'.$logo)}}" class="img-fluid rounded img-raised" /></div>
                                     <div class="action">
                                </div>
                                </div>
                            </div>
                            <div class="details col-lg-8 col-md-12">
                                <h3 class="product-title m-b-0">{{$nama_perusahaan}}</h3>
                                <!-- <h4 class="price m-t-0">Hari Kerja: <span class="col-amber">180</span></h4> -->
                                <hr>
                                <p class="vote"><strong>Slogan</strong> {{$slogan}}</p>
                               <div class="row clearfix social-widget">                   
                                    <div class="col-lg-6 col-md-4">
                                        <div class="content">
                                                <small class="text-muted">Website: </small>
                                                <p>{{$website}}</p>
                                                <hr>
                                                <small class="text-muted"> Favicon:</small>
                                                <p> <div class="preview-pic tab-content">
                                                	<div class="tab-pane active" id="product_1"><img src="{{url('data-identitas/getImageFavicon/'.$favicon)}}" class="img-fluid rounded img-raised" width="100px" /></div>
                                                	</div>
                                                </p>
                                                
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4">
                                            <div class="content">
                                                <small class="text-muted">Email Kantor: </small>
                                                <p>{{$email}}</p>
                                                <hr>
                                                <small class="text-muted">Phone: </small>
                                                <p>~ {{$telp}}</p>
                                                <hr>
                                                <small class="text-muted"> <a title="instagram" href="#" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i> <span style="color: #000;">Instagram</span> </a> </small>
                                                <p>~ {{$instagram}}</p>
                                                <hr>
                                                <small class="text-muted"> <a title="instagram" href="#" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter"></i> <span style="color: #000;">Twitter</span> </a> </small>
                                                <p>~ {{$twitter}}</p>
                                                <hr>
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
                                <p>{{$alamat}}</p>
                                <hr>
                            </div>
                            <div class="tab-pane" id="about">
                                <h6>Where does it come from?</h6>
                                <p>{{$tentang}}</p>
                                <p>{{$nama_perusahaan}} berdiri : {{$tgl_launcing}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
	@include('backend.identitas-perusahaan.ar-form.identitas')
	@include('backend.identitas-perusahaan.ar-form.identitas-img')
@endsection
@push('scriptbottom')
<script type="text/javascript">
    function modal_edit_show() {
        $('#ar-modal-edit').modal('show');
        $('.modal-backdrop').hide();    
    }

    // Simpan Data Identitas Perusahaan
        $('#save-data-form').on('click', function (e){
            var form = $('#ar-modal-form')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-identitas/update') }}";
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
                        $('#ar-modal-edit').modal('hide');
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
        });
    // Batas
</script>
<!-- <script src="{{ asset('backend/assets/js/backend/identitas-perusahaan/data-proses.js')}}"></script> -->
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script> 
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 
<script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script>

@endpush