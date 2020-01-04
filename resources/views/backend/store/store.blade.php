<?php 
use App\layanan;
?>
@extends('layouts.backend.app')
@section('title', $data->nama_toko)
@section('header', $data->nama_toko)
@section('subheader','Pengaturan '.$data->nama_toko)
@section('bread') <a href="#">{{$data->jenisvendor->nama_vendor}}</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/bootstrap-select2/select2.min.css')}}" rel="stylesheet"/>
<link href="{{ asset('backend/assets/plugins/bootstrap-select2/dist/select2-bootstrap4.css')}}" rel="stylesheet"/>
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/css/custom-produk.css')}}">


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
                                    <div class="tab-pane active" id="product_1">
                                        <div class="container_profile">
                                          <img title="klik untuk melihat kumpulan gambar" src="{{url('data-store/getImageToko/'.$img)}}" alt="Product img">
                                           <a class="btn Profile_btn" title="Edit Gambar" onclick="modal_img_show('{{$data->id}}')"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></a>
                                        </div></div>
                                </div>             
                            </div>
                            <div class="details col-lg-8 col-md-12">
                                <h3 class="product-title m-b-0">{{$data->nama_toko}}</h3>
                                <strong class="price m-t-0">Layanan / Jasa: 
                                    <button type="button" class="btn btn-neutral" onclick="modal_layanan_add('{{$data->id}}','{{$data->jenisvendor_id}}')"><i class="zmdi zmdi-plus-circle"></i></button></strong>
                                <div class="tag-list">
                                    @foreach($layanan as $l)
                                        
                                    <div title="@if($l->status == 1) Aktif @else Off @endif" onclick="openModalLayanan('{{$l->id}}')" class="badge @if($l->status == 1) badge-info @else badge-default @endif">{{$l->nama_layanan}} <i class="zmdi zmdi-delete" style="color:grey;"></i></div>
                                    @endforeach
                                </div>
                                <hr>
                                <p class="product-description">{{$data->tentang}}</p>
                                <p class="vote"><strong>Slogan</strong> {{$data->slogan}}</p>
                               <div class="row clearfix social-widget">                   
                                    <div class="col-lg-6 col-md-4">
                                        <div class="content">
                                                <small class="text-muted">Email address: </small>
                                                <p>{{$data->User->email}}</p>
                                                <hr>
                                                <small class="text-muted">Phone: </small>
                                                <p>~ {{$data->hp}}</p>
                                                <p>~ {{$data->telp}}</p>
                                                <hr>
                                                <small class="text-muted"> <a title="instagram" href="#" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i> <span style="color: #000;">Instagram</span> </a> </small>
                                                <p>~ @ {{$data->instagram}}</p>
                                                <hr>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4">
                                            <div class="content">
                                                <ul class="list-group">
                                                    @foreach($waktu as $w)
                                                        <li class="list-group-item" title="@if($w->status == 1) Buka  @else Tutup @endif"> 
                                                            <span class="badge @if($w->status == 1) l-turquoise  @else bg-grey @endif waves-effect"onclick="openModalHk('{{$w->id}}')">{{$w->dari}} - {{$w->sampai}}  </span>
                                                            <span class="badge @if($w->status == 1) bg-orange  @else bg-grey @endif waves-effect" onclick="openModalHk('{{$w->id}}')">{{getHari($w->hari)}}</span>
                                                            <span class="badge @if($w->status == 1) g-bg-cgreen @else g-bg-soundcloud @endif waves-effect" onclick="openModalHk('{{$w->id}}')">{{$w->keterangan}} </span> 
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="action">
                                    <button class="btn btn-primary btn-round waves-effect" type="button" onclick="openModaledit('{{$data->id}}')">Edit Data</button>
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
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Tentang Toko</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#review">Review Pelanggan</a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="body">                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <small class="text-muted">Alamat Toko: </small>
                                <p>{{$data->alamat}} </p>
                                    <a class="nav-link active" data-toggle="tab" href="#home_only_icon_title"><i class="zmdi zmdi-map"></i> Lihat Maps</a>
                                <hr>
                                   <div id="tokoLokasi" style="width:100%;height:380px;display: none;"></div>
                            </div>
                            <div class="tab-pane" id="about">
                                <h6>{{$data->nama_toko}}</h6>
                                <p>{{$data->tentang}}</p>
                            </div>
                            <div class="tab-pane" id="review">
                                <ul class="row list-unstyled c_review">
                                    @foreach($testimo as $t)
                                    <li class="col-12">
                                        <div class="avatar">
                                            <a href="#"><img class="rounded" src="{{asset('backend/assets/images/default-user-avatar.jpg')}}" alt="user" width="60"></a>
                                        </div>                                
                                        <div class="comment-action">
                                            <h5 class="c_name">{{$t->customer->nama_lengkap}}</h5>
                                            <p class="c_msg m-b-0"> {{$t->isi_ulasan}} </p>
                                            <div class="badge badge-primary">@if($t->ratting > 4) Sangat Puas @elseif($t->ratting == 4) Puas @elseif($t->ratting == 3) Cukup @else Kurang Puas @endif</div>
                                            <span class="m-l-10">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <a href="#"><i class="zmdi @if($i <= $t->ratting) zmdi-star col-amber @else zmdi-star-outline text-muted @endif"></i></a>
                                                @endfor
                                            </span>
                                            <small class="comment-date float-sm-right">{{tgl_indo_with_jam($t->created_at)}}</small>
                                        </div>                                
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="paginate">{{$testimo->links()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
@section('modal')
    @include('backend.store.ar-form.store-img-upload')
    @include('backend.store.ar-form.store')
    @include('backend.store.ar-form.store-jam-kerja')
    @include('backend.store.ar-form.store-layanan')
    @include('backend.store.ar-form.store-layanan-add')
@endsection
@push('scriptbottom')
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 
<script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('backend/assets/plugins/gmaps/gmaps.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/bootstrap-select2/select2.min.js')}}"></script>

<script type="text/javascript">
    $('.select2').select2({
          theme: 'bootstrap4',
          width: 'style',
          placeholder: $(this).attr('placeholder'),
          allowClear: Boolean($(this).data('allow-clear')),
    });
    function modal_img_show(id) {
        $('#ar-modal-img').modal('show');
        $('.modal-backdrop').hide();
        $('#ar-modal-img #id').val(id);
    }
    function modal_layanan_add(id,jenis_vendor) {
        $('#ar-modal-layanan-add').modal('show');
        $('#ar-modal-layanan-add select[name="layanan_id"]').empty();
        $('.modal-backdrop').hide();
        var url  = "{{ url('data-store/show-layanan-data') }}";
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(data) {
                 $('#ar-modal-layanan-add select[name="layanan_id"]').append('<option value="">Pilih Layanan</option>');
                $.each(data, function(key, value)
                  {
                    $('#ar-modal-layanan-add select[name="layanan_id"]').append('<option value="'+ value.id +'">'+ value.nama_layanan +'</option>');

                });
                $('#ar-modal-layanan-add #id').val(id);
                $('#ar-modal-layanan-add #jenis_vendor_id').val(jenis_vendor);


            }
        });
    }
    function openModalLayanan(id) {
        $('#ar-modal-layanan').modal('show');
        $('.modal-backdrop').hide();

        var url  = "{{ url('data-store/show-layanan') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {

              $('#ar-modal-layanan #id').val(id);
              $('#ar-modal-layanan #nm_layanan').val(e.layanan.nama_layanan);
              $('#ar-modal-layanan #harga').val(e.vendor.harga_layanan);
              $('#ar-modal-layanan #keterangan').val(e.vendor.catatan_layanan);
              $('#ar-modal-layanan #statusLayanan option[value='+ e.vendor.status +']').prop("selected", true).change();
            },
            error : function(e){
             showErrorMessage();
            }
        });
    }
    function openModalHk(id) {
        $('#ar-modal-jam-kerja').modal('show');
        $('.modal-backdrop').hide();

        var url  = "{{ url('data-store/show-hk') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {

              $('#ar-modal-jam-kerja #id').val(e.id);
              $('#ar-modal-jam-kerja #status_hari option[value='+ e.status +']').prop("selected", true).change();
              $('#ar-modal-jam-kerja #jam_buka').val(e.dari);
              $('#ar-modal-jam-kerja #jam_tutup').val(e.sampai);
              $('#ar-modal-jam-kerja #keterangan').val(e.keterangan);
            },
            error : function(e){
             showErrorMessage();
            }
        });
    }
    function openModaledit(id) {
        $('#ar-modal-edit').modal('show');
        $('.modal-backdrop').hide();

        var url  = "{{ url('data-store/show-edit') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {

              $('#ar-modal-edit #vendor_id').val(e.vendor_id);
              $('#ar-modal-edit #nama_toko').val(e.nama_toko);
              $('#ar-modal-edit #jenis_vendor').val(e.jenis_vendor);
              $('#ar-modal-edit #no_telp').val(e.no_telp);
              $('#ar-modal-edit #no_hp').val(e.no_hp);
              $('#ar-modal-edit #email').val(e.email);
              $('#ar-modal-edit #instagram').val(e.instagram);
              $('#ar-modal-edit #slogan').val(e.slogan);
              $('#ar-modal-edit #tentang_toko').val(e.tentang_toko);
              $('#ar-modal-edit #alamat_toko').val(e.alamat_toko);
              $('#ar-modal-edit #lat').val(e.lat);
              $('#ar-modal-edit #lng').val(e.lng);
              // $('#ar-modal-edit #group_menu option[value='+ e.parent_menu_id +']').prop("selected", true).change();

                setTimeout(function() {
                    navigator.geolocation.getCurrentPosition((result) => {

                    if (e.lat != '' && e.lng != '') {
                        var position = {
                          lat: e.lat,
                          lng: e.lng
                        }
                    }
                    else
                    {
                        var position = {
                          lat: result.coords.latitude,
                          lng: result.coords.longitude
                        }
                    }

                    var map = new GMaps({
                      div: '#googleMap',
                      lat: position.lat,
                      lng: position.lng
                    });

                    if (position) {
                      // map.addMarker({position: position });
                      var propertiPeta = {
                        center:new google.maps.LatLng(position.lat,position.lng),
                        zoom:15,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                      };
                    }
                    else
                    {
                        alert("Tidak ada koneksi internet atau izinkan browser mengetahui lokasi anda.");
                    }
                          var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
                          google.maps.event.addListener(peta, 'click', function(event) {
                            addMarker(this, event.latLng);
                          });
                  });
                }, 250);


            },
            error : function(e){
             showErrorMessage();
            }
        });
    }

    var marker;
    function addMarker(peta, posisiTitik){
        if( marker ){marker.setPosition(posisiTitik);} // pindahkan marker
        else { 
                  marker = new google.maps.Marker({
                    position: posisiTitik,
                    map: peta
                  });
        }// buat marker baru
        document.getElementById("lat").value = posisiTitik.lat();
        document.getElementById("lng").value = posisiTitik.lng();
    }

    // Update Informasi Toko
        $('#save_menu').on('click', function (e){
            var form = $('#ar-modal-form-store')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-store/edit') }}";
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
                        document.getElementById("ar-modal-form-store").reset();
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
    // Simpan Data Hari Kerja
        $('#save-data-hari-kerja').on('click', function (e){
            var form = $('#ar-modal-form-jam-kerja')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-store/edit-hari-kerja') }}";
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
                        $('#ar-modal-form-jam-kerja').modal('hide');
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
    // Tambah Data Layanan to vendors
        $('#save-data-layanan-add').on('click', function (e){
            var form = $('#ar-modal-form-layanan-add')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-store/add-layanan-data') }}";
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
                        $('#ar-modal-form-layanan-add').modal('hide');
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
    // Tambah Data Gambar to vendors
        $('#save-data-img').on('click', function (e){
            var form = $('#ar-modal-form-img')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-store/add-logo-vendor') }}";
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
                        $('#ar-modal-img').modal('hide');
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
    // Edit Data Layanan
        $('#save-data-layanan').on('click', function (e){
            var form = $('#ar-modal-form-layanan')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-store/edit-layanan') }}";
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
                        $('#ar-modal-form-layanan').modal('hide');
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
<script type="text/javascript">

$('#description').on('click', function (e){
    $('#tokoLokasi').show();
    initialize();
});
    function initialize() {
      var petaProperti = {
        center:new google.maps.LatLng(<?php echo $data->latitude; ?>,<?php echo $data->longitude ?>),
        zoom:17,
        mapTypeId:google.maps.MapTypeId.HYBRID,
        disableDefaultUI: true
      };
      
      var petaP = new google.maps.Map(document.getElementById("tokoLokasi"), petaProperti);
      
      // membuat Marker
      var marker=new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo $data->latitude; ?>,<?php echo $data->longitude ?>),
          map: petaP,
          animation: google.maps.Animation.BOUNCE,
          icon: "{{ asset('backend/assets/images/icon/store.ico')}}"

      });
      var bandung = new google.maps.LatLng(<?php echo $data->latitude; ?>,<?php echo $data->longitude ?>);
       var lingkaran = new google.maps.Circle({
       center: bandung,
       radius: 100,
       strokeColor: "#0000F7",
       strokeOpacity: 0.9,
       strokeWeight: 1,
       fillColor: "#0000F7",
       fillOpacity: 0.2
     });
    lingkaran.setMap(petaP);
}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  
@endpush